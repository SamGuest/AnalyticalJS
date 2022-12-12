import { data } from "browserslist";

/* Global Variables */

var details = initDetails();
export var website = "analyticaljs.com";
export var siteDomain = window.location.hostname;
export var userIP = "";
export var referrer = "";
export var referrerDomain = "";
export var failed = false;
export var id = "";

async function initDetails(){
    var theResponse;
    fetch("https://analyticaljs.com/api/initDetails").then( (response) => response.json() ).then((responseData) => {
        userIP = responseData.userIP;
        referrer = responseData.referrer;
        referrerDomain = responseData.referrerDomain;
        failed = responseData.failed;
        id = responseData.id;
    });
    return theResponse;
}

/* End Global Vars */