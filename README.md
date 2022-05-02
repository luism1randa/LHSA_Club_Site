# LHSA_Club_Site
Website for the Latinx Health Student Association. LHSA is a club at the University of Arizona made to gather resources, information, and advice for Latino students looking to apply to medical school.

Website was made entirely from vanilla HTML, CSS, Javascript, and PHP. It does not use any frameworks or plugins. All components are entirely custom made.

Custom components include:
- Google Calendar integration
- Accordians
- Responsive navigation menu
- Slideshow with carousel

Extras include:
- Facebook chat integration
- Google Maps integration

## Feature Highlights

### Google Calendar Component | PHP, AJAX, Javascript
- Uses Google Calendar API
- Uses Google's Oauth to authenticate calendar account
- Acccesses a google calendar feed and extracts details for a single or multiple events including:
    - date
    - time
    - location
    - event description
- Extracted details are custom styled
- Fully responsive for desktop and mobile layouts

| Desktop view | Mobile view |
| ----------- | ----------- |
| ![Screenshot of Google Calendar Plugin on Dekstop](screenshots/calendar_desktop.png?) | ![Screenshot of mobile google Calendar Plugin](screenshots/calendar_mobile.png) |


### Navigation Menu
- Menu navigation is fully respnosive to large and small screens
- On large screens it expands to show full links to all pages 
- on small screens, links collapse into a hamburger menu which can be used to open up a menu containing page links

| Desktop Navigation | Mobile Navigation |
| ----------- | ----------- |
| ![Screenshot of navigation on desktop](screenshots/navigation_desktop.png) | ![Screenshot of navigation on Mobile](screenshots/navigation_mobile.png) |


### Accordion Component | HTML, CSS, Javascript
- Fully responsive for large and small screens. On large screens accordions are automatically expanded to take advantage of the increased space. On small screens such as mobile, accordions are collapsed to allow the user to selectively choose what information they would like to view. 

#### Desktop Screenshots
| Expanded view on desktop | Collapsed view on desktop |
| ----------- | ----------- |
| ![Screenshot of expanded accordion on desktop](screenshots/accordion_desktop_expanded.png) | ![Screenshot of collapsed accordion on desktop](screenshots/accordion_desktop_collapsed.png) |


#### Mobile Screenshots
| Expanded view on mobile | Collapsed view on mobile |
| ----------- | ----------- |
| ![Screenshot of expanded accordion on mobile](screenshots/accordion_mobile_expanded.png) | ![Screenshot of collapsed accordion on mobile](screenshots/accordion_mobile_collapsed.png) |


### Slideshow With Carousel
- Slideshow is meant to showcase photos of most exciting events. The user can switch between photos using the next and previous buttons integrated into the carousel below it
- the carousel also contains thumbnails of all the available images in the slideshow

| Expanded view on mobile | Collapsed view on mobile |
| ----------- | ----------- |
| ![Screenshot of slideshow on desktop](screenshots/slideshow_desktop.png) | ![Screenshot of slideshow on mobile](screenshots/slideshow_mobile.png) |


## Extra Features

### Facebook Chat integration
- The club already had a facebook page. Facebook chat plugin was integrated so site visitors could automatically engage with club members and ask frequently asked questions. 
- chat integration was customized with color to fit with the sites overall aesthetic and brand

| ![Screenshot of Facebook Chat](screenshots/facebook_chat_1.png) | ![Screenshot of Facebook Chate 2](screenshots/facebook_chat_2.png) |


### Google Maps Integration
- Google maps embeds were used to show where the club meets on different occasions. Maps are completely interactable and allow user to zoom in on specific streets or get gps directions.
- embed was made fully responsive for large and small screen sizes
![Screenshot of Google Maps Integrations](screenshots/google_maps.png)


### Google My Maps Integration
- Google My Maps embed was also used to create a custom map showing available parking locations and details of said locations to club events.
- embed was made fully responsive for large and small screen sizes
![Screenshot of Google My Maps](screenshots/google_my_maps.png)