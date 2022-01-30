/* jshint esversion: 8 */
import axios from "axios";
 

class Search {
    // 1. describe and create object
    constructor() {
    axios.defaults.headers.common["X-WP-Nonce"] = coachingData.api_nonce;  
    this.addSearchHTML();
    
    this.resultsDiv = document.getElementById('search-overlay__results');
    this.openButton = document.querySelectorAll('.js-search-trigger');
    this.closeButton = document.querySelector('.search-overlay__close');    
    this.searchOverlay = document.querySelector('.search-overlay');
    this.searchField = document.getElementById('search-term');
    this.body = document.getElementsByTagName('body');
    this.inputs = ['input', 'select', 'button', 'textarea'];

    this.isOverlayOpen = false;
    this.isSpinnerVisible = false;
    this.previousValue ='';
    this.typingTimer();
    this.events();  
   // const list = document.createDocumentFragment();
    }
    // 2. events
    events() {
        this.openButton.forEach(el => {
          el.addEventListener("click", e => {
            e.preventDefault();
            this.openOverlay();
          });
        });
        //this.openButton[1].addEventListener("click", () => this.openOverlay());
        this.closeButton.addEventListener("click", () => this.closeOverlay());
        document.addEventListener("keydown", (e) => this.keyPressDispatcher(e));
        this.searchField.addEventListener("keyup", (e) => this.typingLogic(e));
        
    }
    // 3. methods/function/action verbs
    typingLogic(e) {

        if (this.searchField.value != this.previousValue) {
              clearTimeout(this.typingTimer);

              if (this.searchField.value) {
                if (!this.isSpinnerVisible) {
                  this.resultsDiv.innerHTML = '<div class="spinner-loader"></div>';
                  this.isSpinnerVisible = true;
                }
                this.getResults();              
              } else {
                this.resultsDiv.innerHTML = '';
                this.isSpinnerVisible = false;
              }

            }

            this.previousValue = this.searchField.value;
    }
    getRestResults() {
      //  const urlPosts = universityData.root_url + '/wp-json/wp/v2/posts?search=' + this.searchField.value;    
         // path does NOT require the entire path just the endpoint
       
         // fetch( wpApiSettings.root + 'university/v1/search?term=' + this.searchField.value, {
         //        method: 'GET',
         //    } )
         //    .then( data => data.json() )
         //    .then( data => {
         //        console.log( data );
         //        this.createList(data); 
         //    } );
         
         // use axios if you do not use fetch api; using wpApiSettings do not need to localize_script
         // 
        fetch(  wpApiSettings.root + 'university/v1/search?term=' + this.searchField.value, {
                method: 'GET',
            } )
            .then( data => {
                if ( data.status != 200 ) {
                    console.log( data.status + ' Error: ' + data.statusText );
                    return;
                }
                data.json().then( data => {                    
                    this.createList(data); 
                } );
            } );
    }
    async getResults() {
    try {
      const response = await axios.get(universityData.root_url + "/wp-json/university/v1/search?term=" + this.searchField.value);
      const results = response.data;
      this.resultsDiv.innerHTML = `
        <div class="row">
          <div class="one-third">
            <h2 class="search-overlay__section-title">General Information</h2>
            ${results.generalInfo.length ? '<ul class="link-list min-list">' : "<p>No general information matches that search.</p>"}
              ${results.generalInfo.map(item => `<li><a href="${item.permalink}">${item.title}</a> ${item.postType == "post" ? `by ${item.authorName}` : ""}</li>`).join("")}
            ${results.generalInfo.length ? "</ul>" : ""}
          </div>
          <div class="one-third">
            <h2 class="search-overlay__section-title">Programs</h2>
            ${results.programs.length ? '<ul class="link-list min-list">' : `<p>No programs match that search. <a href="${universityData.root_url}/programs">View all programs</a></p>`}
              ${results.programs.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join("")}
            ${results.programs.length ? "</ul>" : ""}

            <h2 class="search-overlay__section-title">Professors</h2>
            ${results.professors.length ? '<ul class="professor-cards">' : `<p>No professors match that search.</p>`}
              ${results.professors
          .map(
            item => `
                <li class="professor-card__list-item">
                  <a class="professor-card" href="${item.permalink}">
                    <img class="professor-card__image" src="${item.image}">
                    <span class="professor-card__name">${item.title}</span>
                  </a>
                </li>
              `
          )
          .join("")}
            ${results.professors.length ? "</ul>" : ""}

          </div>
          <div class="one-third">
            <h2 class="search-overlay__section-title">Campuses</h2>
            ${results.campuses.length ? '<ul class="link-list min-list">' : `<p>No campuses match that search. <a href="${universityData.root_url}/campuses">View all campuses</a></p>`}
              ${results.campuses.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join("")}
            ${results.campuses.length ? "</ul>" : ""}

            <h2 class="search-overlay__section-title">Events</h2>
            ${results.events.length ? "" : `<p>No events match that search. <a href="${universityData.root_url}/events">View all events</a></p>`}
              ${results.events
          .map(
            item => `
                <div class="event-summary">
                  <a class="event-summary__date t-center" href="${item.permalink}">
                    <span class="event-summary__month">${item.month}</span>
                    <span class="event-summary__day">${item.day}</span>  
                  </a>
                  <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="${item.permalink}">${item.title}</a></h5>
                    <p>${item.description} <a href="${item.permalink}" class="nu gray">Learn more</a></p>
                  </div>
                </div>
              `
          )
          .join("")}

          </div>
        </div>
      `;
      this.isSpinnerVisible = false;
    } catch (e) {
      console.log(e);
    }
  }

    // async getResults() {
    //     // delete this code later on after setting up custom rest route in php
    //     try{
    //         const urlPosts = universityData.root_url + '/wp-json/wp/v2/posts?search=' + this.searchField.value;    
    //         const urlPages = universityData.root_url + '/wp-json/wp/v2/pages?search=' + this.searchField.value;
        
    //          const [postsResponse, pagesResponse] = await Promise.all([
    //             fetch(urlPosts),
    //             fetch(urlPages)
    //             ]);
    //        // const responsePosts = await fetch(urlPosts);
       
    //         const dataPosts = await postsResponse.json();

    //        // const responsePages = await fetch(urlPages);

    //         const dataPages = await pagesResponse.json();

    //         const data = dataPosts.concat(dataPages);
            
    //         this.createList(data);    

    //         this.isSpinnerVisible = false;
    //     } catch(e) {
    //         // only if the situation could fail.
    //         console.log("There was a problem fetching the data.");
    //     }  
       
    // }

    createList(results) {       
      // evaluate as real javascript code -> ${list.title.rendered}; list is personal choice to map dataList
      this.resultsDiv.innerHTML = (`
        <div class="row">
          <div class="one-third">
            <h2 class="search-overlay__section-title">General Information</h2>
            ${results.generalInfo.length ? '<ul class="link-list min-list">' : "<p>No general information matches that search.</p>"}
              ${results.generalInfo.map(item => `<li><a href="${item.permalink}">${item.title}</a> ${item.postType == "post" ? `by ${item.authorName}` : ""}</li>`).join("")}
            ${results.generalInfo.length ? "</ul>" : ""}
          </div>
          <div class="one-third">
            <h2 class="search-overlay__section-title">Programs</h2>
            ${results.programs.length ? '<ul class="link-list min-list">' : `<p>No programs match that search. <a href="${universityData.root_url}/programs">View all programs</a></p>`}
              ${results.programs.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join("")}
            ${results.programs.length ? "</ul>" : ""}

            <h2 class="search-overlay__section-title">Professors</h2>
            ${results.professors.length ? '<ul class="professor-cards">' : `<p>No professors match that search.</p> <a href="${universityData.root_url}/professors">View all professors</a></p>`}
              ${results.professors
                .map(
                  item => `
                <li class="professor-card__list-item">
                  <a class="professor-card" href="${item.permalink}">
                    <img class="professor-card__image" src="${item.image}">
                    <span class="professor-card__name">${item.title}</span>
                  </a>
                </li>
              `
                )
                .join("")}
            ${results.professors.length ? "</ul>" : ""}

          </div>
          <div class="one-third">
            <h2 class="search-overlay__section-title">Campuses</h2>
            ${results.campuses.length ? '<ul class="link-list min-list">' : `<p>No campuses match that search. <a href="${universityData.root_url}/campuses">View all campuses</a></p>`}
              ${results.campuses.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join("")}
              ${results.campuses.length ? "</ul>" : ""}

            <h2 class="search-overlay__section-title">Events</h2>
            ${results.events.length ? "" : `<p>No events match that search. <a href="${universityData.root_url}/events">View all events</a></p>`}
              ${results.events
                .map(
                  item => `
                <div class="event-summary">
                  <a class="event-summary__date t-center" href="${item.permalink}">
                    <span class="event-summary__month">${item.month}</span>
                    <span class="event-summary__day">${item.day}</span>  
                  </a>
                  <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="${item.permalink}">${item.title}</a></h5>
                    <p>${item.description} <a href="${item.permalink}" class="nu gray">Learn more</a></p>
                  </div>
                </div>
              `
                )
                .join("")}

          </div>
        </div>
      `);
                     
    }
    // function to use key 'S' to open and 'Esc' to close
    keyPressDispatcher(e) {
        
        // use key code for 'S' key is 's' code is "KeyS" and escape key is "Escape"
        // check if element with focus is equal to -1 then it is active or focused
        // OR use document.activeElement.tagName != "INPUT" && document.activeElement.tagName != "TEXTAREA"
        if ( e.code == 'KeyS' && !this.isOverlayOpen && 
            (document.activeElement.tagName && 
                this.inputs.indexOf(document.activeElement.tagName.toLowerCase()) == -1 )) {
                this.openOverlay();
            }
        // setting isOverlayOpen stops method from continuously running due to holding down the key
        if ( e.code == 'Escape' && this.isOverlayOpen ) {
                this.closeOverlay();
            }
    }

    openOverlay() {
        // set focus on search field
        this.searchOverlay.classList.add("search-overlay--active");
        this.body[0].classList.add("body-no-scroll");
        this.searchField.value = '';
        setTimeout(() => this.searchField.focus(), 301);
        this.isOverlayOpen = true;
        return false; // prevents default behavior of link elements if javascript is NOT enabled
    }

    closeOverlay() {

        this.searchOverlay.classList.remove("search-overlay--active");
        this.body[0].classList.remove("body-no-scroll");
        this.isOverlayOpen = false;
    }

    addSearchHTML() {
     
     document.body.insertAdjacentHTML(
      "beforeend",
      `
        <div class="search-overlay">
            <div class="search-overlay__top">
                <div class="container relative">
                    <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                    <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term" autocomplete="off">
                    <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
                </div>
            </div>
            <div class="container">
                <div id="search-overlay__results"><ul></ul>
                </div>
            </div>
        </div>
    `
    );
  }

}
export default Search;