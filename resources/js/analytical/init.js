import { init } from "./analytical.js";
let System = new init();

window.onload = function(){

    console.log(process.env.MIX_APP_URL);

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
            fetch(process.env.MIX_APP_URL+"/api/unmount/"+System.vars.id);
        }

        function init(){
            System.debugMessage("Analytical.js intilised");
            System.debugMessage(System.vars.referrerDomain);
        }
}
