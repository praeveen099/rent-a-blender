document.addEventListener('DOMContentLoaded', () => {

  const ul = document.querySelector(".blendersList");

  ul.addEventListener('mouseover', (e)=> {
    if (e.target.tagName === "IMG"){
        const imageMouseIsOver = e.target;
        // blur the image when the mouse hovers over
        imageMouseIsOver.classList.add('blur');


        // Create a button
        const buttonAttachedToImage = document.createElement("BUTTON");
        buttonAttachedToImage.textContent = "Click here to check the blender out!";

        if (imageMouseIsOver.parentNode.children[1].nodeName !== "BUTTON"){

        buttonAttachedToImage.classList.add('btn');
        imageMouseIsOver.parentNode.insertBefore(buttonAttachedToImage, imageMouseIsOver.nextSibling);

        }
        // after 2 seconds, remove blur
        setTimeout(()=>{
        imageMouseIsOver.classList.remove('blur');
        buttonAttachedToImage.remove();
      }, 2000);
    }

  });

});
