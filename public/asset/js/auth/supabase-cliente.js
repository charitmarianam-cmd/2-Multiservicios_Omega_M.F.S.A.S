/**
 * Cliente único de Supabase para toda la app.
 * Multiservicios Omega M.F.S.A.S
 * Requiere: config.js + CDN @supabase/supabase-js
 */
(function () {
  const cfg = window.APP_CONFIG || {};
  const url = (cfg.SUPABASE_URL || "").trim();
  const key = (cfg.SUPABASE_ANON_KEY || "").trim();

  const looksPlaceholder =
    !url ||
    !key ||
    url.includes("TU-PROYECTO") ||
    key.includes("pega_aqui");

  if (looksPlaceholder) {
    console.warn(
      "[Auth] Falta configurar asset/js/auth/config.js con tu SUPABASE_URL y SUPABASE_ANON_KEY."
    );
    window.__AUTH_CONFIG_MISSING__ = true;
  } else {
    window.__AUTH_CONFIG_MISSING__ = false;
  }

  if (typeof window.supabase === "undefined" || !window.supabase.createClient) {
    console.error("[Auth] No se cargó la librería @supabase/supabase-js (CDN).");
    window.supabaseClient = null;
    return;
  }

  window.supabaseClient = window.supabase.createClient(
    url || "https://invalid.local", 
    key || "invalid"
  );
})();