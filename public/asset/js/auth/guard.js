/**
 * Protección de páginas privadas + datos del usuario + logout.
 * Multiservicios Omega M.F.S.A.S
 */
(function () {
  const $ = (sel) => document.querySelector(sel);

  function fillUser(user) {
    if (!user) return;
    const email = user.email || "—";
    const name = user.user_metadata?.full_name || "Usuario";
    const id = user.id || "—";

    document.querySelectorAll("[data-user-email]").forEach((el) => {
      el.textContent = email;
    });
    document.querySelectorAll("[data-user-name]").forEach((el) => {
      el.textContent = name;
    });
    document.querySelectorAll("[data-user-id]").forEach((el) => {
      el.textContent = id;
    });

    const avatar = $("#user-avatar");
    if (avatar) {
      avatar.textContent = (name || email).charAt(0).toUpperCase();
    }
  }

  async function requireSession() {
    if (window.__AUTH_CONFIG_MISSING__ || !window.supabaseClient) {
      window.location.href = "/";
      return null;
    }

    const { data, error } = await window.supabaseClient.auth.getSession();
    if (error || !data?.session) {
      window.location.href = "/";
      return null;
    }
    return data.session;
  }

  async function init() {
    const session = await requireSession();
    if (!session) return;

    fillUser(session.user);
    document.body.classList.add("auth-ready");

    // Manejo robusto del botón de cerrar sesión
    const btnLogout = $("#btn-logout");
    if (btnLogout) {
      btnLogout.addEventListener("click", async (e) => {
        e.preventDefault();
        try {
          if (window.supabaseClient) {
            await window.supabaseClient.auth.signOut();
          }
        } catch (err) {
          console.error("Error al cerrar sesión en Supabase:", err);
        } finally {
          // Limpiar almacenamiento local y redirigir a la raíz
          localStorage.clear();
          window.location.href = "/";
        }
      });
    }

    window.supabaseClient.auth.onAuthStateChange((event) => {
      if (event === "SIGNED_OUT") {
        window.location.href = "/";
      }
    });
  }

  init();
})();