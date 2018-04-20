window.WebPuzzler = window.WebPuzzler || {};
var WebPuzzler = window.WebPuzzler;
WebPuzzler.lib = WebPuzzler.lib || {};

// Create function inside a colsure
(function() {
    /**
     * Load a list of users from backend
     * @return {User[]} Array of user objects with the properties name and progress
     **/
    function loadUsers() {
        return fetch('/admin/getallstudents')
            .then(function(userData) {
                return userData.json();
            });
    }

    WebPuzzler.lib.loadUsers = loadUsers;
})();