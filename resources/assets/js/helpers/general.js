export function hasElement(selector) {
  // Only run if on template portfolio
  return document.querySelector(selector)
}

  
export function throttle(fn, delay) { 
  let time = Date.now(); 

  return () => { 
    if((time + delay - Date.now()) <= 0) { 
      // Run the function we've passed to our throttler, 
      // and reset the `time` variable (so we can check again). 
      fn(); 
      time = Date.now(); 
    } 
  } 
}

export function decodeHTMLEntities(text) {
  const parser = new DOMParser();
  const decodedString = parser.parseFromString(text, 'text/html').body.textContent;
  return decodedString;
}

export function isBelow(breakpoint) {
  const breakpoints = { "sm": 576, "md": 768, "lg": 992, "xl": 1200 };

  return window.innerWidth < breakpoints[breakpoint];
}
