document.addEventListener("DOMContentLoaded", function() {
    const photos = document.querySelectorAll(".photo img");
    
    photos.forEach(photo => {
        photo.addEventListener("click", function() {
            const lightbox = document.createElement("div");
            lightbox.id = "lightbox";
            document.body.appendChild(lightbox);

            const img = document.createElement("img");
            img.src = this.src;
            lightbox.appendChild(img);

            lightbox.addEventListener("click", function() {
                lightbox.remove();
            });
        });
    });
});
