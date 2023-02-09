export const addSelfDestructingEventListener = (
  element,
  eventType,
  callback
) => {
  let handler = () => {
    callback();
    element.removeEventListener(eventType, handler);
  };
  element.addEventListener(eventType, handler);
};
