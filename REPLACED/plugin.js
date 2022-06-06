

function request(url, data, callback){

    var xhr = new XMLHttpRequest();
    xhr.open('POST, url, true');
    var loader = document.createElement ('div');
    loader.className='loader';
    document.body.appendChild(loader);
    xhr.addEventListener('readystatechange', function(){
        if(xhr.readyState== 4){
            if(callback){
                callback(xhr.response);
            }
        }
    });

xhr.send(data ? (data instanceof FormData ? data : new FormData(document.querySelector)) : undefined);
}
