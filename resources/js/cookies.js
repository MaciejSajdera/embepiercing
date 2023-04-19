import { gtag } from "ga-gtag";
// Create cookie
export function setCookie(cname, cvalue) {
  const d = new Date();
  d.setTime(d.getTime() + 7 * 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Delete cookie
export function deleteCookie(cname) {
  document.cookie = cname + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

// Read cookie
export function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// Set cookie consent
export function acceptCookieConsent(cookieName, duration) {
  deleteCookie(cookieName);

  if (cookieName === "user_cookie_consent") {
    gtag("consent", "grant", {
      ad_storage: "granted",
      analytics_storage: "granted",
    });
  }

  setCookie(cookieName, 1);
}

export function handleCookiesAccept(
  modalNode,
  modalObject,
  cookieName,
  ...rest
) {
  let cookie_consent = getCookie(cookieName);

  if (cookie_consent === "1" && cookieName === "user_cookie_consent") {
    gtag("consent", "update", {
      ad_storage: "granted",
      analytics_storage: "granted",
    });
  }

  if (cookie_consent === "" && cookieName === "user_cookie_consent") {
    setTimeout(() => {
      modalObject.show();
    }, 2500);
  }

  if (cookie_consent === "" && cookieName === "adult_user_cookie_consent") {
    modalObject.show();
  }

  if (cookie_consent === "1" && rest) {
    rest.forEach((handler) => {
      if (!typeof handler === "function") return;
      handler();
    });
  }

  modalNode.addEventListener("click", (e) => {
    if (
      e.target.id === "reject" &&
      cookieName === "adult_user_cookie_consent"
    ) {
      return;
    }

    if (e.target.id === "reject") {
      modalObject.hide();
      return;
    }

    if (e.target.id === "accept") {
      acceptCookieConsent(cookieName);

      const isHiddenPromise = new Promise((resolve, reject) => {
        resolve(modalObject.hide());
      });

      isHiddenPromise.then(() => {
        if (rest) {
          rest.forEach((handler) => {
            handler();
          });
        }
      });
    }
  });
}
