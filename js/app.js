window.addEventListener('load', function(){
    "use strict";

    // Define an empty array. The fetch function will save film data to this array.
    let reviews = []

    // Define an event listener for each category. 
    document.getElementById('5').addEventListener('click', function() {
        displayReviews(reviews, 5);
    })
    document.getElementById('4').addEventListener('click', function() {
        displayReviews(reviews, 4);
    })
    document.getElementById('3').addEventListener('click', function() {
        displayReviews(reviews, 3);
    })
    document.getElementById('2').addEventListener('click', function() {
        displayReviews(reviews, 2);
    })
    document.getElementById('1').addEventListener('click', function() {
        displayReviews(reviews, 1);
    })
    // This event listener for 'all' does not pass a category to displayFilms
    document.getElementById('All').addEventListener('click', function() {
        displayReviews(reviews);
    })

    function displayReviews(json, rating) {
        // Check if a rating is defined
        if (rating) {
            // Filter based on the rating
            json = json.filter(function(review) {
                return review.rating === rating;
            });
        }

        let reviews = json.map(function(review) {
            return '<div class="review">' + '<div class="review-content">' + '<h3>' + review.title + '</h3>' + '<p class="author">' + review.reviewer.name + '</p>' + '<p>' + review.review + '</p>' + '</div>' + '<div class="rating-content">' + '<p class="rating">Rating</p>' + '<h1 class="rating">' + review.rating + '</h1>' + '</div>' + '</div>';
        });

        document.getElementById('app').innerHTML = reviews.join('');
    }

    const URL = 'data/reviews.json';

    fetch(URL)
        .then(
            function(response) {
                return response.json();
            }
        )
        .then(
            function(json) {
                console.log(json);
                reviews = json;
                displayReviews(reviews);
            }
        )
        .catch(
            function(error) {
                console.log("Something went wrong.", error);
            }
        );

    console.log(URL);
});