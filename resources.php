<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel and Accommodation Resources</title>
    <link rel="stylesheet" href="resources.css" />
    <style>
      /* Back-to-Top Button Styles */
      #backToTop {
        display: none;
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #3490dc;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      }
      #backToTop:hover {
        background-color: #1d72b8;
      }
    </style>
  </head>
  <body>
    <?php
      session_start();

      // Page visits logic
      $file = "page_visits.txt";
      $count = file_exists($file) ? (int) file_get_contents($file) : 0;
      file_put_contents($file, ++$count);
      $_SESSION['visits'] = $count;
    ?>

    <!-- Navigation bar -->
    <nav>
      <a href="index.php">Home</a>
      <a href="gallery.html">Gallery</a>
    </nav>

    <!-- Header -->
    <header>
      <h1>Travel & Accommodation Resources</h1>
    </header>

    <!-- Main Content -->
    <main>
      <h2>Useful Websites for Your Next Trip</h2>
      <ul>
        <li>
          <a href="https://www.booking.com" target="_blank">Booking.com</a>
          - Find the best deals on hotels, apartments, and unique accommodations
          worldwide. Ideal for comparing prices.
        </li>
        <li>
          <a href="https://www.airbnb.com" target="_blank">Airbnb</a>
          - Explore unique stays, including homes and experiences hosted by
          locals. Perfect for personalized trips.
        </li>
        <li>
          <a href="https://www.expedia.com" target="_blank">Expedia</a>
          - Offers everything from flights to hotels and car rentals. Great for
          package deals and one-stop booking.
        </li>
        <li>
          <a href="https://www.kayak.com" target="_blank">Kayak</a>
          - A powerful search engine for flights, hotels, and rental cars.
          Helpful for finding the cheapest options.
        </li>
        <li>
          <a href="https://www.tripadvisor.com" target="_blank">Tripadvisor</a>
          - Browse millions of traveler reviews and ratings for hotels,
          restaurants, and attractions worldwide.
        </li>
        <li>
          <a href="https://www.hotels.com" target="_blank">Hotels.com</a>
          - Specializes in finding hotel deals and provides reward nights after
          several bookings. A solid choice for frequent travelers.
        </li>
        <li>
          <a href="https://www.hostelworld.com" target="_blank">Hostelworld</a>
          - Offers a huge selection of hostels for budget travelers, with
          reviews and recommendations from past guests.
        </li>
        <li>
          <a href="https://www.trivago.com" target="_blank">Trivago</a>
          - Compares prices across multiple accommodation platforms, ensuring
          you get the best deal for your stay.
        </li>
        <li>
          <a href="https://www.skyscanner.net" target="_blank">Skyscanner</a>
          - A fantastic site for finding affordable flights, hotels, and car
          rentals. Known for its flexible date search options.
        </li>
        <li>
          <a href="https://www.couchsurfing.com" target="_blank"
            >Couchsurfing</a
          >
          - Connects travelers with hosts offering free accommodations,
          fostering cultural exchange and social experiences.
        </li>
      </ul>

      <!-- Display Date and Visits -->
      <p>Today's Date: <?php echo date("Y-m-d"); ?></p>
      <p>Page Visits: <?php echo $_SESSION['visits']; ?></p>
    </main>

    <!-- Back-to-Top Button -->
    <button id="backToTop" onclick="scrollToTop()">Back to Top</button>

    <!-- JavaScript -->
    <script>
      // Show or hide the button based on scroll position
      window.onscroll = function () {
        const button = document.getElementById("backToTop");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          button.style.display = "block";
        } else {
          button.style.display = "none";
        }
      };

      // Scroll to the top when the button is clicked
      function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
      }
    </script>
  </body>
</html>
