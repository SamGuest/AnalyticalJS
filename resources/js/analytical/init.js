import { init } from "./analytical.js";
let System = new init();

window.onload = function(){

        /* Initilising Analytical.JS */
        startUp()
        
        function startUp(){
            if(System.vars.failed == false){
                if(System.vars.userIP != ""){
                    init();
                } else {
                    setTimeout( () => { startUp(); }, 1 );
                }
            }
        }

        window.onbeforeunload = function (event) {
            if(process.env.NODE_ENV == "production"){
                var url = process.env.MIX_APP_URL_PROD+"/api/unmount/"+System.vars.id;
            } else {
                var url = process.env.MIX_APP_URL+"/api/unmount/"+System.vars.id;
            }
            fetch(url);
        }

        function init(){
            System.debugMessage("Analytical.js intilised");
            System.debugMessage(System.vars.referrerDomain);
        }
}
