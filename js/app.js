document.addEventListener('DOMContentLoaded', () => {

  const ul = document.querySelector(".blendersList");

  ul.addEventListener('mouseover', (e)=> {
    if (e.target.tagName === "IMG"){
      const imageMouseIsOver = e.target;
      // blur the image when the mouse hovers over
      imageMouseIsOver.classList.add('blur');

      // after 5 seconds, remove blur
      setTimeout(()=>{
      imageMouseIsOver.classList.remove('blur');
    }, 5000);
    }

  });

});
