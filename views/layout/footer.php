<footer class="footer">
    <p>Book Store Management System</p>
</footer>

<script>
document.getElementById('searchBox')?.addEventListener('keyup', function() {
    let value = this.value.toLowerCase();
    document.querySelectorAll('.book-card').forEach(card => {
        card.style.display =
            card.dataset.title.includes(value) ? 'block' : 'none';
    });
});
</script>

</body>

</html>
