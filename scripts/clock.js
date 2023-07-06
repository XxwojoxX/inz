$(document).ready(function() {
    // Funkcja aktualizująca zegar
    function updateClock() {
      var now = new Date();
      var hours = now.getHours();
      var minutes = now.getMinutes();

      // Dodaj zero przed jednocyfrowymi liczbami
      hours = hours < 10 ? "0" + hours : hours;
      minutes = minutes < 10 ? "0" + minutes : minutes;

      // Wyświetl czas w elemencie o id "clock"
      $("#clock").text(hours + ":" + minutes);
    }

    // Wywołaj funkcję updateClock co sekundę
    setInterval(updateClock, 1000);
  });