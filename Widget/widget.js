widget();

async function widget(){
    const id = document.currentScript.id;
    const wc = "."+id;

    async function getConfig(){
        let result = await fetch(document.currentScript.dataset.config);
        let config = await result.json();
        return config
    }

    let config = await getConfig();
    defer();

    function defer(method){
        if(window.jQuery){
            init($);
            return;
        } else{
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = config.jqueryURL;
            document.getElementsByTagName('head')[0].appendChild(script);
            setTimeout(function(){
                defer(method); }, 50);
        }
    }
}
function init($){
    $(document).ready(function(){
        $(wc).append("./HTML/click.html");
    })
}
