<script>
    // CREATE CLIENT MODAL
    // CREATE CLIENT MODAL
    // CREATE CLIENT MODAL
    (function() {
        var clientModal = document.getElementById("create-client-modal");
        var close = clientModal.querySelector(".button-modal");
        var closeBtn = clientModal.querySelector(".close");


        function openCreateClientModal() {
            clientModal.style.display = "grid !important";
        }

        function closeClientModal() {
            clientModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeClientModal();
        };

        close.onclick = function() {
            closeClientModal();
        };

        window.onclick = function(event) {
            if (event.target === clientModal) {
                closeClientModal();
            }
        };

        window.openCreateClientModal = openCreateClientModal;
        window.closeClientModal = closeClientModal;
    })();
</script>

<script>
    // EDIT CLIENT MODAL
    // EDIT CLIENT MODAL
    // EDIT CLIENT MODAL
    (function() {
        var clientModal = document.getElementById("edit-client-modal");
        var close = clientModal.querySelector(".button-modal");
        var closeBtn = clientModal.querySelector(".close");

        function openEditClientModal() {
            clientModal.style.display = "block";
        }

        function closeClientModal() {
            clientModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeClientModal();
        };

        close.onclick = function() {
            closeClientModal();
        };

        window.onclick = function(event) {
            if (event.target === clientModal) {
                closeClientModal();
            }
        };

        window.openEditClientModal = openEditClientModal;
        window.closeClientModal = closeClientModal;
    })();
</script>

<script>
    // SUPPLIER MODAL CREATE
    (function() {
        var supplierModal = document.getElementById("create-supplier-modal");
        var close = supplierModal.querySelector(".supplierconfirm-btn");
        var closeBtn = supplierModal.querySelector(".close");

        function openCreateSupplierModal() {
            supplierModal.style.display = "flex";
        }

        function closeSupplierModal() {
            supplierModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeSupplierModal();
        };

        close.onclick = function() {
            closeSupplierModal();
        };

        window.onclick = function(event) {
            if (event.target === supplierModal) {
                closeSupplierModal();
            }
        };

        window.openCreateSupplierModal = openCreateSupplierModal;
        window.closeSupplierModal = closeSupplierModal;
    })();
</script>

<script>
    // SUPPLIER MODAL EDIT
    (function() {
        var supplierModal = document.getElementById("edit-supplier-modal");
        var close = supplierModal.querySelector(".supplierbutton-modal");
        var closeBtn = supplierModal.querySelector(".close");

        function openEditSupplierModal() {
            supplierModal.style.display = "flex";
        }

        function closeSupplierModal() {
            supplierModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeSupplierModal();
        };

        close.onclick = function() {
            closeSupplierModal();
        };

        window.onclick = function(event) {
            if (event.target === supplierModal) {
                closeSupplierModal();
            }
        };

        window.openEditSupplierModal = openEditSupplierModal;
        window.closeSupplierModal = closeSupplierModal;
    })();
</script>

<script>
    // NOTIFICATION SUCCESS MODAL
    (function() {
        var notificationSuccessModal = document.getElementById("notification-success-modal");
        var closeBtn = notificationSuccessModal.querySelector(".continue-button");

        function openNotificationSuccessModal() {
            notificationSuccessModal.style.display = "flex";
        }

        function closeNotificationSuccessModal() {
            notificationSuccessModal.style.display = "none";
        }

        closeBtn.onclick = function() {
            closeNotificationSuccessModal();
        };

        window.openNotificationSuccessModal = openNotificationSuccessModal;
        window.closeNotificationSuccessModal = closeNotificationSuccessModal;
    })();
</script>





<!-- PARENT POST MESSAGE -->
<script>
    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = 'none'; // Hide the modal
        }
    }

    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = 'block'; // Show the modal
        } else {
            console.error('Modal not found:', modalId);
        }
    }

    window.addEventListener('message', (event) => {
        switch (event.data) {
            case 'openCreateClientModal':
                openModal('create-client-modal'); // OPEN CREATE CLIENT MODAL
                break;

            case 'openEditClientModal':
                openModal('edit-client-modal'); // OPEN EDIT CLIENT MODAL
                break;

            case 'openCreateSupplierModal':
                openModal('edit-supplier-modal'); // OPEN CREATE SUPPLIER MODAL
                break;

            case 'openEditSupplierModal':
                openModal('edit-supplier-modal'); // OPEN EDIT SUPPLIER MODAL
                break;

                // NOTIFICATION SUCCESS
            case 'notificationSuccess':
                openNotificationSuccessModal(); // Notification Successful
                break;

        }
    });
</script>

<script>
    window.addEventListener('message', function(event) {
        switch (event.data) {
            case 'user-openCreateUser':
                loadPHPContent('forms/user-create.php');
                break;

            case 'user-openEditUser':
                loadPHPContent('forms/user-edit.php');
                break;
        }
    });

    function loadPHPContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.querySelector('.main-content').innerHTML = data;
            })
    }
</script>



</body>

</html>