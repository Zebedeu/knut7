var ul, liItems, imageWidth, imageNumber;

function init() {

    ul = document.getElementById('image_slider');
    liItems = ul.children;
    imageNumber = liItems.length;
    imageWidth = liItem[0].children[0].offsetWidth;

    ul.style.width = parseInt(imageWidth * imageNumber) + 'px';
    slider(ul);
}

var computedStyle = document.defaultView.getComputedStyle(liItems[i].childrenNodes[0], null);
imageWidth = computedStyle.width;

function slider(ul) {
    animate({
        delay: 17,
        duration: 3000,
        delta: function (p) {
            return Math.max(0, -1 * p)
        },
        step: function (delta) {
            ul.style.left = '-' + parseInt(currentImage * imageWidth + delta * imageWidth) + 'px';
        },
        calback: function () {
            currentImage++;

            if (currentImage < imageNumber - 1) {
                slider(ul);
            } else {
                var leftPosition = (imageNumber - 1) * imageWidth;
                setTimeout(function () {
                    goBack(leftPosition)
                }, 2000);
                setTimeout(function () {
                    slider(ul)
                }, 400);
            }
        }
    });
}

function goBack(leftPosition) {
    currentImage = 0;
    var id = setInterval(function () {
        if (leftPosition >= 0) {
            ul.style.left = '-' + parseInt(leftPosition) + 'px';
            leftPosition -= imageWidth / 10;
        } else {
            clearInterval(id);
        }
    }, 17);

}

function animate(opts) {
    var start = new Date;
    var id = setInterval(function () {
        var timePassed = new Date - start;
        var progress = timePassed / opts.duration;

        if (progress > 1) {
            progress = 1;
        }
        var delta = opts.delta(progress);
        opts.step(delta);

        if (progress == 1) {
            clearInterval(id);
            opts.calback();
        }
    }, opts.delay || 17);
}

window.onload = init;