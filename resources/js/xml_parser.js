function processPostData(returnData) {
    document.getElementsByTagName("body").innerHTML = returnData.responseText;
}
