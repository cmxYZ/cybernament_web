var lang = document.getElementById('lang');
lang.addEventListener('mouseenter', openLangs);

var langPanel = document.createElement('div');
var engLink = document.createElement('a');
engLink.textContent = 'English';
engLink.style.position = 'relative';
engLink.style.top = '50px';
engLink.href = '../en/index.php';
engLink.className = 'color-white';

var ruLink = document.createElement('a');
ruLink.textContent = 'Русский';
ruLink.style.position = 'relative';
ruLink.style.top = '50px';
ruLink.href = '../ru/index.php';
ruLink.className = 'color-white';

langPanel.style.position = 'absolute';
langPanel.style.height = '100px';
langPanel.style.width = '155px';
langPanel.style.textAlign = 'center';
langPanel.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
langPanel.addEventListener('mouseleave', closeLangs);

if (lang.textContent == 'Русский')
{
    langPanel.appendChild(engLink);
}
if (lang.textContent == 'English')
{
    langPanel.appendChild(ruLink);
}

function openLangs()
{
    lang = document.getElementById('lang');
    langPanel.style.left = (lang.offsetLeft - 16).toString() + 'px';
    langPanel.style.top = lang.offsetTop.toString() + 'px';
    lang.appendChild(langPanel);
}

function closeLangs()
{
    lang.removeChild(langPanel);
}

var downloadbutton = document.getElementById('download');

downloadbutton.addEventListener('mouseup', () => {downloadbutton.style.backgroundColor = 'rgba(0, 0, 0, 0.85)'});
downloadbutton.addEventListener('mousedown', () => {downloadbutton.style.backgroundColor = 'rgb(46, 5, 5, 0.85)'});
