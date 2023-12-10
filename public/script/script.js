<script>
    // Fungsi untuk mengirim ulasan
    function submitReview() {
      
        var review = document.getElementById("review").value;
        var rating = document.querySelector('input[name="rating"]:checked').value;
        
        console.log("Ulasan: " + review);
        console.log("Peringkat: " + rating);
        
</script>
