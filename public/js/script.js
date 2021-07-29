const showNoneIfEmpty = true;
let word = "cineland";
let input = "";

document.addEventListener('DOMContentLoaded', function(event)
{
    document.body.addEventListener('keypress',function(ev)
    {
        if(input.length > word.length) { input = input.substr(1); }
        input += String.fromCharCode(ev.keyCode);
        if(input.length > word.length) { input = input.substr(1); }
        if(input === word) { backgroundRandColor(1); }
    });

    let selectable = document.getElementsByClassName("selectable")[0];
    let select = document.getElementsByClassName("select")[0];
    let labels = selectable.getElementsByTagName("label");

    selectable.parentNode.insertBefore(select.parentNode, selectable);

    if(showNoneIfEmpty === true )
    {
        for(let i = 0; i < labels.length; i++)
        {
            let br = document.createElement("br");
            insertAfter(labels[i],br);

            if(labels[i].previousElementSibling.checked === false)
            {
                labels[i].hidden = true;  labels[i].previousElementSibling.hidden = true; labels[i].nextElementSibling.hidden = true;
            }
            else
            {
                labels[i].hidden = false;  labels[i].previousElementSibling.hidden = false; labels[i].nextElementSibling.hidden = false;
            }
        }
    }

    select.addEventListener('keyup', function (event) {sort(event)})
});

function backgroundRandColor(zoom)
{
    if(zoom===1)
    {
        document.body.style.transform = 'scale(' + 1.01 + ')';
        zoom = 0;
    }
    else
    {
        document.body.style.transform = 'scale(' + 1 + ')';
        zoom = 1;
    }


    document.body.style.background = getRandomColor();
    setTimeout(function() {backgroundRandColor(zoom);}, 500);
}

function getTransformValue(element,property)
{
    let values = element[0].style.webkitTransform.split(")");

    for (let  key in values)
    {
        let val = values[key];
        let prop = val.split("(");
        if (prop[0].trim() == property)
            return prop[1];
    }
    return false;
}

function getRandomColor()
{
    let letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++)
    {
        color += letters[Math.floor(Math.random() * 16)];
    }

    return color;
}

function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function sort(event)
{
    let div = document.getElementsByClassName("selectable")[0];
    let labels = div.getElementsByTagName("label");
    let nbrResult = 0;

    for(let i = 0; i < labels.length; i++)
    {
        if(labels[i].previousElementSibling.checked === true){ labels[i].hidden = false; labels[i].previousElementSibling.hidden = false; }
        else if(event.currentTarget.value.toString().trim() === "")
        {
            if(showNoneIfEmpty === true){ labels[i].hidden = true; labels[i].previousElementSibling.hidden = true; labels[i].nextElementSibling.hidden = true;}
            else{ labels[i].hidden = false; labels[i].previousElementSibling.hidden = false; labels[i].nextElementSibling.hidden = false;}
        }
        else
        {
            let a = new RegExp(event.currentTarget.value.toString().trim().toLocaleLowerCase());
            let matches = labels[i].innerText.toLocaleLowerCase().match(a);

            if(matches === null || nbrResult >= 10){ labels[i].hidden = true; labels[i].previousElementSibling.hidden = true; labels[i].nextElementSibling.hidden = true;}
            else{ nbrResult++; labels[i].hidden = false; labels[i].previousElementSibling.hidden = false; labels[i].nextElementSibling.hidden = false;}
        }
    }
}