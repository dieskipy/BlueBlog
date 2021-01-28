window.onload = function () {

    //получаем идентификатор элемента
    var vd = document.querySelector('#sortViewsDescending');
    var va = document.querySelector('#sortViewsAscending');
    var dd = document.querySelector('#sortDateDescending');
    var da = document.querySelector('#sortDateAscending');


    if (vd != null) {
            vd.onclick = function sortDescending() {
                let parent = document.querySelector('#mygrid');
                for (let i = 0; i < parent.children.length; i++) {
                    for (let j = i; j < parent.children.length; j++) {
                        let ni = parseInt(parent.children[i].getAttribute('data-views'), 10);
                        let nj = parseInt(parent.children[j].getAttribute('data-views'), 10);
                        if (ni < nj) {
                            let replaceNode = parent.replaceChild(parent.children[j], parent.children[i]);
                            InsertAfter(replaceNode, parent.children[i]);
                        }
                    }
                }
            }

            va.onclick = function sortAscending() {
                let parent = document.querySelector('#mygrid');
                for (let i = 0; i < parent.children.length; i++) {
                    for (let j = i; j < parent.children.length; j++) {
                        let ni = parseInt(parent.children[i].getAttribute('data-views'), 10);
                        let nj = parseInt(parent.children[j].getAttribute('data-views'), 10);
                        if (ni > nj) {
                            let replaceNode = parent.replaceChild(parent.children[j], parent.children[i]);
                            InsertAfter(replaceNode, parent.children[i]);
                        }
                    }
                }
            }

        dd.onclick = function sortDescending() {
            let parent = document.querySelector('#mygrid');
            for (let i = 0; i < parent.children.length; i++) {
                for (let j = i; j < parent.children.length; j++) {
                    let ni = Date.parse(parent.children[i].getAttribute('data-date'));
                    let nj = Date.parse(parent.children[j].getAttribute('data-date'));
                    if (ni < nj) {
                        let replaceNode = parent.replaceChild(parent.children[j], parent.children[i]);
                        InsertAfter(replaceNode, parent.children[i]);
                    }
                }
            }
        }

        da.onclick = function sortAscending() {
            let parent = document.querySelector('#mygrid');
            for (let i = 0; i < parent.children.length; i++) {
                for (let j = i; j < parent.children.length; j++) {
                    let ni = parent.children[i].getAttribute('data-date');
                    let nj = parent.children[j].getAttribute('data-date');
                    if (ni > nj) {
                        let replaceNode = parent.replaceChild(parent.children[j], parent.children[i]);
                        InsertAfter(replaceNode, parent.children[i]);
                    }
                }
            }
        }

        function InsertAfter(elem, refElem) {
            return refElem.parentNode.insertBefore(elem, refElem.nextSibling);
        }
    }


    var myform = document.querySelector('#myform');
    var mybtn = document.querySelector('#submitButton');
    if (myform != null) {
        myform.addEventListener('submit', function validate(event) {
            var emailField = document.querySelector('#InputEmail');
            var passwordField = document.querySelector('#InputPassword');
            var errors = myform.querySelectorAll('.error')
            for (var i = 0; i < errors.length; i++) {
                errors[i].remove()
            }

            if (passwordField.value.length < 6) {
                event.preventDefault();
                console.log('Длина пароля должна быть более шести символов!');
                var error = document.createElement('div');
                error.className = 'error';
                error.style.color = 'red';
                error.innerHTML = 'Длина пароля должна быть более шести символов!';
                passwordField.parentElement.insertBefore(error, passwordField);
            }
            if (emailField.value.length < 6) {
                event.preventDefault();
                console.log('Длина пароля должна быть более шести символов!');
                var error = document.createElement('div');
                error.className = 'error';
                error.style.color = 'red';
                error.innerHTML = 'Длина email не менее шести символов!';
                emailField.parentElement.insertBefore(error, emailField);
            }
        })
    }


}
//
// document.querySelector('#sortViewsDescending').onclick =sortDescending('data-views');
// document.querySelector('#sortViewsAscending').onclick =sortAscending('data-views');
// document.querySelector('#sortDateDescending').onclick =sortDescending('data-date');
// document.querySelector('#sortDateAscending').onclick =sortAscending('data-date');
// function sortDescending(dataType){
//     let parent = document.querySelector('#mygrid');
//     console.log(parent);
//     console.log(parent.children);
//     console.log(parent.children[0].getAttribute(dataType));
//     for (let i=0; i<parent.children.length;i++){
//         for (let j=i; j<parent.children.length;j++){
//             let ni = parent.children[i].getAttribute(dataType);
//             let nj = parent.children[j].getAttribute(dataType);
//             if (ni<nj){
//                 let replaceNode = parent.replaceChild(parent.children[j], parent.children[i]);
//                 InsertAfter(replaceNode,parent.children[i]);
//             }
//         }
//     }
//     console.log(parent);
// }
// function sortAscending(dataType){
//     let parent = document.querySelector('#mygrid');
//     console.log(parent);
//     for (let i=0; i<parent.children.length;i++){
//         for (let j=i; j<parent.children.length;j++){
//             let ni = parent.children[i].getAttribute(dataType);
//             let nj = parent.children[j].getAttribute(dataType);
//             if (ni>nj){
//                 let replaceNode = parent.replaceChild(parent.children[j], parent.children[i]);
//                 InsertAfter(replaceNode,parent.children[i]);
//             }
//         }
//     }
//     console.log(parent);
// }
//
// function InsertAfter(elem, refElem){
//     return refElem.parentNode.insertBefore(elem,refElem.nextSibling);
// }