// Create cookie
export function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Delete cookie
export function deleteCookie(cname) {
  const d = new Date();
  d.setTime(d.getTime() + 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=;" + expires + ";path=/";
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
  setCookie(cookieName, 1, duration);
}

export function handleCookiesAccept(
  modalNode,
  modalObject,
  cookieName,
  ...rest
) {
  let cookie_consent = getCookie(cookieName);

  //   console.log("cookie_consent: ", cookieName);

  if (cookie_consent === "") {
    modalObject.show();
  }

  if (cookie_consent === "1" && rest) {
    rest.forEach((handler) => {
      if (!typeof handler === "function") return;
      handler();
    });
  }

  modalNode.addEventListener("click", (e) => {
    if (e.target.id === "accept") {
      acceptCookieConsent(cookieName, 0.04);

      const isHiddenPromise = new Promise((resolve, reject) => {
        console.log("resolved");
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
