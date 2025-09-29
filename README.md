# Kamkus College of Law Website

This is the official website for Kamkus College of Law, an ISO Certified Institution.

## Project Structure

```
kamkus/
├── assets/
│   ├── gallery/          # Gallery images
│   ├── recruiters/       # Recruiter logos
│   └── ...               # Other images (logo, campus, etc.)
├── css/
│   └── styles.css        # Main stylesheet
├── js/
│   └── main.js           # JavaScript functionality
├── index.html            # Main homepage
└── README.md             # This documentation
```

## Features

- Responsive design that works on desktop, tablet, and mobile
- Image slider for showcasing campus and events
- Animated news ticker
- Gallery section with hover effects
- Latest news and upcoming events sections
- Featured reviews from alumni
- Mobile-friendly navigation

## Technologies Used

- HTML5
- CSS3 (with CSS variables for theming)
- JavaScript (vanilla, no frameworks)
- Font Awesome for icons

## Setup

1. Clone the repository
2. Ensure you have a web server with PHP support (like XAMPP, WAMP, or LAMP)
3. Place the files in your server's web directory
4. Access the website through your localhost

## Customization

### Adding Slider Images

To add or change slider images:

1. Add your images to the `assets/` directory
2. Modify the `sliderImages` array in `js/main.js`

### Updating Content

Most of the content can be updated directly in the HTML file. Key sections include:

- Header information and menu items
- News ticker content
- About section
- Chief Mentor's and Principal's messages
- Gallery images and captions
- Latest news and upcoming events
- Footer links and contact information

## Browser Compatibility

This website is compatible with:

- Google Chrome (latest)
- Mozilla Firefox (latest)
- Safari (latest)
- Microsoft Edge (latest)
- Opera (latest)

## Note

This site was developed based on the reference website at https://kamkus.summitcodeworks.com/ 