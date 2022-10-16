function ajax(request){
    if(typeof request !== 'object'){ request={}; }
    let fun = "function";
    let undef = "undefined";
    let xmlHttp;

    if(typeof XMLHttpRequest !== undef){
        xmlHttp = new XMLHttpRequest;
    }else if(typeof window.ActiveXObject){
        ["MSXML2.XMLHttp.4.0", "MSXML2.XMLHttp.3.0", "MSXML2.XMLHttp", "Microsoft.XMLHttp" ].forEach(version =>{
            xmlHttp = new ActiveXObject(version);
        })
    }

    let hasFailure = (typeof request.onfailure == fun);

    if(!xmlHttp){
        if(hasFailure){
            request.onfailure(0, "");
        }
        return false;
    }

    let hasProgress = (typeof request.onprogress == fun && xmlHttp.upload);

    if(hasProgress){
        xmlHttp.upload.addEventListener("progress", e=>{
            request.onprogress(Math.floor((e.loaded / e.total) * 100));
        })
    }

    xmlHttp.onreadystatechange = function(){
        if(xmlHttp.readyState == 4){
            if(xmlHttp.status == 200){
                if(hasProgress){
                    request.onprogress(false);
                }
                if(typeof request.onsuccess == "function"){
                    request.onsuccess(xmlHttp.responseText, xmlHttp.status, xmlHttp.statusText);
                }
            }
            else if(hasFailure){
                request.onfailure(xmlHttp.status, xmlHttp.statusText);
            }
        }
    };

    xmlHttp.open((request.method || "GET"), (request.url || location.pathname));
    
    if(request.ContentType){
        if(typeof FormData == undef || !(request.data instanceof FormData)){
            xmlHttp.setRequestHeader("Content-Type", request.contentType);
        }
    }

    xmlHttp.send(request.data || null);
}