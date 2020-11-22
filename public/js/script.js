function test(){
    alert('ok');
}


/**
 * Ajax call
 *
 * @param string url
 * @param string param
 * @param string idBlock
 * @param string responseAction
 */
function ajx(url, param, method, idBlock, callBack) {
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText != 0) {
                if (idBlock != "") {
                    document.getElementById(idBlock).innerHTML = xmlhttp.responseText;
                    if (document.querySelector('[autofocus]'))
                        document.querySelector('[autofocus]').focus();
                }
                if (callBack != "")
                    if (typeof callBack === 'function' )
                        callBack(xmlhttp.responseText);
            }
        }
    };
    xmlhttp.open(method, url, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(param);
}


/**
 * Create a modal window
 *
 * @param string modalId
 * @param string contentId
 * @param string modalSize
 */
function createModal(modalId, contentId, modalSize) {
    var modal = document.createElement("div");
    modal.id = modalId;
    modal.className = "modal active";
    document.body.appendChild(modal);

    var overlay = document.createElement("div");
    overlay.className = "modal-overlay";
    modal.appendChild(overlay);

    var container = document.createElement("div");
    container.className = "modal-container" + modalSize;
    modal.appendChild(container);

    var body = document.createElement("div");
    body.className = "modal-body";
    container.appendChild(body);

    var content = document.createElement("div");
    content.id = contentId
    content.className = "content";
    body.appendChild(content);
}

/**
 * Delete a modal window
 *
 * @param string id
 */
function deleteModal(id) {
    document.getElementById(id).remove();
}

//   ***************       USER        *************************
function editProfil(id){
    ajx('/profil/' + id, '', 'GET', 'dtBasicExample');
}

//   ***************       CUSTOMER         *************************

function createCustomer(){
    ajx('/customer/create', '', 'GET', 'dtBasicExample');
}

function editCustomer(id){
    ajx('/stock/edit/' + id, '', 'GET', 'dtBasicExample');
}
