function confLogout() {
    var logout = confirm("Are you sure you want to log out?");
    if (logout) {
        window.location.replace("logout.php");
    }
  }