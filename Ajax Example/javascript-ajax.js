<!--  javascript xhr ajax 
XMLHttpRequest
XMLHttpRequest is a built-in browser object that allows to make HTTP requests in JavaScript.

Despite of having the word “XML” in its name, it can operate on any data, not only in XML format. We can upload/download files, track progress and much more.

Right now, there’s another, more modern method fetch, that somewhat deprecates XMLHttpRequest.

In modern web-development XMLHttpRequest is used for three reasons:

Historical reasons: we need to support existing scripts with XMLHttpRequest.
We need to support old browsers, and don’t want polyfills (e.g. to keep scripts tiny).
We need something that fetch can’t do yet, e.g. to track upload progress.
Does that sound familiar? If yes, then all right, go on with XMLHttpRequest. Otherwise, please head on to Fetch.

The basics
XMLHttpRequest has two modes of operation: synchronous and asynchronous.

Let’s see the asynchronous first, as it’s used in the majority of cases.

To do the request, we need 3 steps:

Create XMLHttpRequest: -->
<script>
let xhr = new XMLHttpRequest();
xhr.open(method, URL, [async, user, password])
/*This method specifies the main parameters of the request:

method – HTTP-method. Usually "GET" or "POST".
URL – the URL to request, a string, can be URL object.
async – if explicitly set to false, then the request is synchronous, we’ll cover that a bit later.
user, password – login and password for basic HTTP auth (if required).
Please note that open call, contrary to its name, does not open the connection. It only configures the request, but the network activity only starts with the call of send.

Send it out.*/

xhr.send([body])

/*This method opens the connection and sends the request to server. The optional body parameter contains the request body.

Some request methods like GET do not have a body. And some of them like POST use body to send the data to the server. We’ll see examples of that later.

Listen to xhr events for response.

These three events are the most widely used:

load – when the request is complete (even if HTTP status is like 400 or 500), and the response is fully downloaded.
error – when the request couldn’t be made, e.g. network down or invalid URL.
progress – triggers periodically while the response is being downloaded, reports how much has been downloaded.*/
xhr.onload = function() {
  alert(`Loaded: ${xhr.status} ${xhr.response}`);
};

xhr.onerror = function() { // only triggers if the request couldn't be made at all
  alert(`Network Error`);
};

xhr.onprogress = function(event) { // triggers periodically
  // event.loaded - how many bytes downloaded
  // event.lengthComputable = true if the server sent Content-Length header
  // event.total - total number of bytes (if lengthComputable)
  alert(`Received ${event.loaded} of ${event.total}`);
};

/* full example*/
// 1. Create a new XMLHttpRequest object
let xhr = new XMLHttpRequest();

// 2. Configure it: GET-request for the URL /article/.../load
xhr.open('GET', '/article/xmlhttprequest/example/load');

// 3. Send the request over the network
xhr.send();

// 4. This will be called after the response is received
xhr.onload = function() {
  if (xhr.status != 200) { // analyze HTTP status of the response
    alert(`Error ${xhr.status}: ${xhr.statusText}`); // e.g. 404: Not Found
  } else { // show the result
    alert(`Done, got ${xhr.response.length} bytes`); // response is the server response
  }
};

xhr.onprogress = function(event) {
  if (event.lengthComputable) {
    alert(`Received ${event.loaded} of ${event.total} bytes`);
  } else {
    alert(`Received ${event.loaded} bytes`); // no Content-Length
  }

};

xhr.onerror = function() {
  alert("Request failed");
};
/*Once the server has responded, we can receive the result in the following xhr properties:

status
HTTP status code (a number): 200, 404, 403 and so on, can be 0 in case of a non-HTTP failure.
statusText
HTTP status message (a string): usually OK for 200, Not Found for 404, Forbidden for 403 and so on.
response (old scripts may use responseText)
The server response body.
We can also specify a timeout using the corresponding property:*/
xhr.timeout = 10000; // timeout in ms, 10 seconds
let url = new URL('https://google.com/search');
url.searchParams.set('q', 'test me!');

// the parameter 'q' is encoded
xhr.open('GET', url); // https://google.com/search?q=test+me%21
/*Response Type
We can use xhr.responseType property to set the response format:

"" (default) – get as string,
"text" – get as string,
"arraybuffer" – get as ArrayBuffer (for binary data, see chapter ArrayBuffer, binary arrays),
"blob" – get as Blob (for binary data, see chapter Blob),
"document" – get as XML document (can use XPath and other XML methods) or HTML document (based on the MIME type of the received data),
"json" – get as JSON (parsed automatically).
For example, let’s get the response as JSON:*/
let xhr = new XMLHttpRequest();

xhr.open('GET', '/article/xmlhttprequest/example/json');

xhr.responseType = 'json';

xhr.send();

// the response is {"message": "Hello, world!"}
xhr.onload = function() {
  let responseObj = xhr.response;
  /*Please note:
In the old scripts you may also find xhr.responseText and even xhr.responseXML properties.

They exist for historical reasons, to get either a string or XML document. Nowadays, we should set the format in xhr.responseType and get xhr.response as demonstrated above.*/
/*An XMLHttpRequest object travels them in the order 0 → 1 → 2 → 3 → … → 3 → 4. State 3 repeats every time a data packet is received over the network.

We can track them using readystatechange event:*/
xhr.onreadystatechange = function() {
  if (xhr.readyState == 3) {
    // loading
  }
  if (xhr.readyState == 4) {
    // request finished
  }
};
/*You can find readystatechange listeners in really old code, it’s there for historical reasons, as there was a time when there were no load and other events. Nowadays, load/error/progress handlers deprecate it.

Aborting request
We can terminate the request at any time. The call to xhr.abort() does that:*/
xhr.abort(); // terminate the request
/*That triggers abort event, and xhr.status becomes 0.

Synchronous requests
If in the open method the third parameter async is set to false, the request is made synchronously.

In other words, JavaScript execution pauses at send() and resumes when the response is received. Somewhat like alert or prompt commands.

Here’s the rewritten example, the 3rd parameter of open is false:*/
let xhr = new XMLHttpRequest();

xhr.open('GET', '/article/xmlhttprequest/hello.txt', false);

try {
  xhr.send();
  if (xhr.status != 200) {
    alert(`Error ${xhr.status}: ${xhr.statusText}`);
  } else {
    alert(xhr.response);
  }
} catch(err) { // instead of onerror
  alert("Request failed");
}
/*t might look good, but synchronous calls are used rarely, because they block in-page JavaScript till the loading is complete. In some browsers it becomes impossible to scroll. If a synchronous call takes too much time, the browser may suggest to close the “hanging” webpage.

Many advanced capabilities of XMLHttpRequest, like requesting from another domain or specifying a timeout, are unavailable for synchronous requests. Also, as you can see, no progress indication.

Because of all that, synchronous requests are used very sparingly, almost never. We won’t talk about them any more.

HTTP-headers
XMLHttpRequest allows both to send custom headers and read headers from the response.

There are 3 methods for HTTP-headers:

setRequestHeader(name, value)
Sets the request header with the given name and value.

For instance:*/
xhr.setRequestHeader('Content-Type', 'application/json');
/*Headers limitations
Several headers are managed exclusively by the browser, e.g. Referer and Host. The full list is in the specification.

XMLHttpRequest is not allowed to change them, for the sake of user safety and correctness of the request.

Can’t remove a header
Another peculiarity of XMLHttpRequest is that one can’t undo setRequestHeader.

Once the header is set, it’s set. Additional calls add information to the header, don’t overwrite it.

For instance:*/
xhr.setRequestHeader('X-Auth', '123');
xhr.setRequestHeader('X-Auth', '456');

// the header will be:
// X-Auth: 123, 456

getResponseHeader(name)
Gets the response header with the given name (except Set-Cookie and Set-Cookie2).

//For instance:

xhr.getResponseHeader('Content-Type')
//getAllResponseHeaders()
//Returns all response headers, except Set-Cookie and Set-Cookie2.

//Headers are returned as a single line, e.g.:

Cache-Control: max-age=31536000
Content-Length: 4260
Content-Type: image/png
Date: Sat, 08 Sep 2012 16:53:16 GMT
//The line break between headers is always "\r\n" (doesn’t depend on OS), so we can easily split it into individual headers. The separator between the name and the value is always a colon followed by a space ": ". That’s fixed in the specification.

//So, if we want to get an object with name/value pairs, we need to throw in a bit JS.

//Like this (assuming that if two headers have the same name, then the latter one overwrites the former one):

let headers = xhr
  .getAllResponseHeaders()
  .split('\r\n')
  .reduce((result, current) => {
    let [name, value] = current.split(': ');
    result[name] = value;
    return result;
  }, {});

// headers['Content-Type'] = 'image/png'

  alert(responseObj.message); // Hello, world!

  //POST, FormData
//To make a POST request, we can use the built-in FormData object.

//The syntax:

let formData = new FormData([form]); // creates an object, optionally fill from <form>
formData.append(name, value); // appends a field
//We create it, optionally fill from a form, append more fields if needed, and then:

xhr.open('POST', ...) //– use POST method.
xhr.send(formData) //to submit the form to the server.
//For instance:
/* <form name="person">
  <input name="name" value="John">
  <input name="surname" value="Smith">
</form>*/

 
  // pre-fill FormData from the form
  let formData = new FormData(document.forms.person);

  // add one more field
  formData.append("middle", "Lee");

  // send it out
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "/article/xmlhttprequest/post/user");
  xhr.send(formData);

  xhr.onload = () => alert(xhr.response);
 The form is sent with multipart/form-data encoding.

Or, if we like JSON more, then JSON.stringify and send as a string.

Just don’t forget to set the header Content-Type: application/json, many server-side frameworks automatically decode JSON with it:

let xhr = new XMLHttpRequest();

let json = JSON.stringify({
  name: "John",
  surname: "Smith"
});

xhr.open("POST", '/submit')
xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');

xhr.send(json);
/*The .send(body) method is pretty omnivore. It can send almost any body, including Blob and BufferSource objects.

Upload progress
The progress event triggers only on the downloading stage.

That is: if we POST something, XMLHttpRequest first uploads our data (the request body), then downloads the response.

If we’re uploading something big, then we’re surely more interested in tracking the upload progress. But xhr.onprogress doesn’t help here.

There’s another object, without methods, exclusively to track upload events: xhr.upload.

It generates events, similar to xhr, but xhr.upload triggers them solely on uploading:

loadstart – upload started.
progress – triggers periodically during the upload.
abort – upload aborted.
error – non-HTTP error.
load – upload finished successfully.
timeout – upload timed out (if timeout property is set).
loadend – upload finished with either success or error.
Example of handlers:*/

xhr.upload.onprogress = function(event) {
  alert(`Uploaded ${event.loaded} of ${event.total} bytes`);
};

xhr.upload.onload = function() {
  alert(`Upload finished successfully.`);
};

xhr.upload.onerror = function() {
  alert(`Error during the upload: ${xhr.status}`);
};
/*Here’s a real-life example: file upload with progress indication:

<input type="file" onchange="upload(this.files[0])"> */

 
function upload(file) {
  let xhr = new XMLHttpRequest();

  // track upload progress
  xhr.upload.onprogress = function(event) {
    console.log(`Uploaded ${event.loaded} of ${event.total}`);
  };

  // track completion: both successful or not
  xhr.onloadend = function() {
    if (xhr.status == 200) {
      console.log("success");
    } else {
      console.log("error " + this.status);
    }
  };

  xhr.open("POST", "/article/xmlhttprequest/post/upload");
  xhr.send(file);
}
/* Cross-origin requests
XMLHttpRequest can make cross-origin requests, using the same CORS policy as fetch.

Just like fetch, it doesn’t send cookies and HTTP-authorization to another origin by default. To enable them, set xhr.withCredentials to true:
*/
let xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.open('POST', 'http://anywhere.com/request');
/*...
See the chapter Fetch: Cross-Origin Requests for details about cross-origin headers.
Typical code of the GET-request with XMLHttpRequest: */

let xhr = new XMLHttpRequest();

xhr.open('GET', '/my/url');

xhr.send();

xhr.onload = function() {
  if (xhr.status != 200) { // HTTP error?
    // handle error
    alert( 'Error: ' + xhr.status);
    return;
  }

  // get the response from xhr.response
};

xhr.onprogress = function(event) {
  // report progress
  alert(`Loaded ${event.loaded} of ${event.total}`);
};

xhr.onerror = function() {
  // handle non-HTTP error (e.g. network down)
};
/*There are actually more events, the modern specification lists them (in the lifecycle order):

loadstart – the request has started.
progress – a data packet of the response has arrived, the whole response body at the moment is in response.
abort – the request was canceled by the call xhr.abort().
error – connection error has occurred, e.g. wrong domain name. Doesn’t happen for HTTP-errors like 404.
load – the request has finished successfully.
timeout – the request was canceled due to timeout (only happens if it was set).
loadend – triggers after load, error, timeout or abort.
The error, abort, timeout, and load events are mutually exclusive. Only one of them may happen.

The most used events are load completion (load), load failure (error), or we can use a single loadend handler and check the properties of the request object xhr to see what happened.

We’ve already seen another event: readystatechange. Historically, it appeared long ago, before the specification settled. Nowadays, there’s no need to use it, we can replace it with newer events, but it can often be found in older scripts.

If we need to track uploading specifically, then we should listen to same events on xhr.upload object.

Create form for sending data with AJAX
<form class="wordpress-ajax-form" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
	<input type="text" name="name">
	<input type="email" name="email">
	<input type="hidden" name="action" value="custom_action">
	<button>Send</button>
</form>

As you see, in order to work with WordPress built-in AJAX handling core functionality, we need form to send data to specific URL, generated by admin_url(‘admin-ajax.php’) function, which basically generates an absolute path to admin-ajax.php file on your WordPress installation. Also, we included an hidden input with action name,  where the value will a part of the action hook name that will handle the request, as You will se later on.

jQuery Part
Now then, let’s create a js file, where we will specify ajax functionality:*/
jQuery(document).ready(function($) {
	
	$('.wordpress-ajax-form').on('submit', function(e) {
		e.preventDefault();
 
		var $form = $(this);
 
		$.post($form.attr('action'), $form.serialize(), function(data) {
			alert('This is data returned from the server ' + data);
		}, 'json');
	});
 
});

/*If you have been using AJAX previously, then this will be clear to you, otherwise, refer to this link for explanation.

Setup WordPress Function For Handling AJAX Request
Now the most important part is to create a function that will actually handle and process AJAX request. To do that, let’s head to functions.php file, and add it:
*/

add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );
function custom_action() {
    // A default response holder, which will have data for sending back to our js file
    $response = array(
    	'error' => false,
    );

    // Example for creating an response with error information, to know in our js file
    // about the error and behave accordingly, like adding error message to the form with JS
    if (trim($_POST['email']) == '') {
    	$response['error'] = true;
    	$response['error_message'] = 'Email is required';

    	// Exit here, for not processing further because of the error
    	exit(json_encode($response));
    }

    // ... Do some code here, like storing inputs to the database, but don't forget to properly sanitize input data!

    // Don't forget to exit at the end of processing
    exit(json_encode($response));
}

 
 
add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );
function custom_action() {
    // A default response holder, which will have data for sending back to our js file
    $response = array(
    	'error' => false,
    );
 
    // Example for creating an response with error information, to know in our js file
    // about the error and behave accordingly, like adding error message to the form with JS
    if (trim($_POST['email']) == '') {
    	$response['error'] = true;
    	$response['error_message'] = 'Email is required';
 
    	// Exit here, for not processing further because of the error
    	exit(json_encode($response));
    }
 
    // ... Do some code here, like storing inputs to the database, but don't forget to properly sanitize input data!
 
    // Don't forget to exit at the end of processing
    exit(json_encode($response));
}
 
/*We created a function which will handle the request, and hooked it to a specific action. The action is formed from two parts: wp_ajax_/wp_ajax_noprov_ + custom_action (notice, this is the value specified in form’s hidden input in our form:


<input type="hidden" name="action" value="custom_action">
 
<input type="hidden" name="action" value="custom_action">
 
 You may ask, why we use wp_ajax_ and wp_ajax_nopriv_, and what is the difference between these two? wp_ajax_ is used for handling requests from authenticated users, whereas wp_ajax_nopriv_ is for non-authenticated users. So if You don’t have requirements from which type of users allow to send AJAX request, then it is a good idea to use these two actions at the same time.

Keep in mind, that WordPress AJAX action can return one of these values: 0 or -1.

0 is returned if the requested action is not created, and -1 is returned if /admin-ajax.php file is accessed directly in URL.

Further Enhancing Security With Nonce
It is a good idea to use special WordPress security functionality called nonce. WordPress nonce is used for security purposes, preventing from attacks like CSRF (Cross-site request forgery). It is basically a unique to the current request generated token, which is used for sending along with other data in the form. It is then verified in the server-side, when processing the request with submitted data, including the token. In the server-side, it is already known excactly what token is expected to be from the coming request, so if token will be missing, or modified, application will throw an exception.

To use nonce in our previous created form, we can do this:


<form class="wordpress-ajax-form" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
	<input type="text" name="name">
	<input type="email" name="email">
	<input type="hidden" name="action" value="custom_action">
	<?php wp_nonce_field( 'custom_action_nonce', 'name_of_nonce_field' ); ?>
	<button>Send</button>
</form>

 
 
<form class="wordpress-ajax-form" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
	<input type="text" name="name">
	<input type="email" name="email">
	<input type="hidden" name="action" value="custom_action">
	<?php wp_nonce_field( 'custom_action_nonce', 'name_of_nonce_field' ); ?>
	<button>Send</button>
</form>
 
For more information on wp_nonce_field function, refer to this link.

Then, our server-side verification would look like this:


add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );
function custom_action() {
    if ( 
        ! isset( $_POST['name_of_nonce_field'] ) 
        || ! wp_verify_nonce( $_POST['name_of_nonce_field'], 'custom_action_nonce') 
    ) {

        exit('The form is not valid');

    }

    // ... Processing further
}

 
 
add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );
function custom_action() {
    if ( 
        ! isset( $_POST['name_of_nonce_field'] ) 
        || ! wp_verify_nonce( $_POST['name_of_nonce_field'], 'custom_action_nonce') 
    ) {
 
        exit('The form is not valid');
 
    }
 
    // ... Processing further
}
 
//That’s it. You learned how to use AJAX to submit forms in WordPress. Now with the power of JavaScript, You can modify form to add success message on successful form submit, or otherwise an error message on failed submition, or anything else.
*/
//Submit the form using AJAX.
var data = new FormData();
data.append("KEY", document.getElementById("FIELD"));
var xhr = new XMLHttpRequest();
xhr.open("POST", "SERVER-SCRIPT");
xhr.send(data); 

//Submit the form using Fetch API.
var data = new URLSearchParams();
data.append("KEY", document.getElementById("FIELD"));
fetch(SERVER-SCRIPT", { method: 'post', body: data });





/*	See download folder no-reload-submit

<form onsubmit="return FUNCTION()">
  Name: <input type="text" id="user-name" required/>
  Email: <input type="email" id="user-email" required/>
  <input type="submit" value="Go!"/>
</form>

First, this is the simple HTML form that we will be working with (for all the below examples). Nothing “special” here, just take note of the onsubmit="return FUNCTION()" part – We will be using Javascript to process the form instead.

 

METHOD 1) SUBMIT FORM USING AJAX
AJAX POST SUBMISSION*/
function ajaxpost(){
  // (A) GET FORM DATA
  var data = new FormData();
  data.append("name", document.getElementById("user-name").value);
  data.append("email", document.getElementById("user-email").value);
 
  // (B) AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "0-dummy.php");
  // What to do when server responds
  xhr.onload = function(){ console.log(this.response); };
  xhr.send(data);
 
  // (C) PREVENT HTML FORM SUBMIT
  return false;
}
/*AJAX stands for “Asynchronous Javascript And XML”, and I will leave a link below if you want to learn more. Anyway, submitting forms with AJAX is as simple as:

A – Create a FormData() object to collect data from the HTML form fields.
B – Next, the AJAX request itself. Take extra note of the xhr.onload section, this is what to do upon completion (when the server responds) – A good place to show a “successful” message or follow up with the next step. Use this.response to fetch the server response and this.status for the HTTP status code.
C – Finally, remember to return false. This will prevent the default HTML form submission (and not reload the entire page).
 

AJAX SUBMISSION */
function ajaxget(){
  // (A) GET FORM DATA
  var data = new URLSearchParams();
  data.append("name", document.getElementById("user-name").value);
  data.append("email", document.getElementById("user-email").value);
 
  // (B) AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "0-dummy.php?" + data.toString());
  // What to do when server responds
  xhr.onload = function(){ console.log(this.response); };
  xhr.send();
 
  // (C) PREVENT HTML FORM SUBMIT
  return false;
}
/*METHOD 2) SUBMIT FORM USING FETCH
FETCH POST SUBMISSION*/
function fetchpost(){
  // (A) GET FORM DATA
  let data = new URLSearchParams();
  data.append("name", document.getElementById("user-name").value);
  data.append("email", document.getElementById("user-email").value);
 
  // (B) FETCH
  fetch("0-dummy.php", {
    method: 'post',
    body: data
  })
  .then(function (response) {
    return response.text();
  })
  .then(function (text) {
    console.log(text);
  })
  .catch(function (error) {
    console.log(error)
  });
 
  // (C) PREVENT HTML FORM SUBMIT
  return false;
}
/*As you can see, the process with fetch() is pretty similar to AJAX, but the usage is totally different.

A – Same old “get data from the form fields”.
B – The fetch() function followed by .then().catch(). This is a part of the promise mechanism and I will leave links below if you want to learn more. This may throw some beginners off, but just follow along with the sequence:
First, fetch() (send data) to the server script.
Then return response.text() when the server responds.
Then do something with the server response – Show the message to the user, or follow up with the next step.
Lastly, catch any errors if they occur.
C – Same, return false to stop the HTML form from reloading the page.

see https://portal.azure.com/ for email information for microsoft 365

https://designmodo.com/bootstrap-5-form/ for quiz form

https://code.tutsplus.com/tutorials/integrating-multiple-choice-quizzes-in-wordpress-creating-the-front-end--wp-31336