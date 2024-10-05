<div class="sidebar-content" style="flex: 0 0 max-content; background-color: #f0f0f0;;">
<div class="sidebar" style="display: flex; flex-direction: column;">
        <!-- Dashboard accessible to all -->
        <div class="modules">
            <button class="module-name" onclick="loadPHP('dashboard.php')">Dashboard</button>
        </div>

        <!-- ADMIN ACCESS: Show all modules -->
        <div class="modules">
            <button class="module-name" onclick="loadPHP('client.php')">Client</button>
        </div>
        <div class="modules">
            <button class="module-name" onclick="loadPHP('supplier.php')">Supplier</button>
        </div>

        <!-- INVENTORY -->
        <div class="modules">
            <button class="module-grp" onclick="toggleDropdown(this)">
                Inventory
                <span class="arrow">&#9660;</span>
            </button>
            <div class="dropdown" style="display: none;">
                <button class="dropdown-link" onclick="loadPHP('inventory/view-record.php')">Inventory Master Data</button>
                <button class="dropdown-link" onclick="loadPHP('inventory/deliveries.php')">Deliveries</button>
                <button class="dropdown-link" onclick="loadPHP('inventory/release-materials.php')">Release Materials</button>
                <button class="dropdown-link" onclick="loadPHP('inventory/excess-materials.php')">Excess Materials</button>
                <button class="dropdown-link" onclick="loadPHP('inventory/request-purchase.php')">Request Purchase</button>
            </div>
        </div>

        <!-- PRODUCTION -->
        <div class="modules">
            <button class="module-grp" onclick="toggleDropdown(this)">
                Production
                <span class="arrow">&#9660;</span>
            </button>
            <div class="dropdown" style="display: none;">
                <button class="dropdown-link" onclick="loadPHP('production/request-material.php')">Request Material</button>
                <button class="dropdown-link" onclick="loadPHP('production/request-return.php')">Request Return</button>
            </div>
        </div>

        <!-- PURCHASING -->
        <div class="modules">
            <button class="module-grp" onclick="toggleDropdown(this)">
                Purchasing
                <span class="arrow">&#9660;</span>
            </button>
            <div class="dropdown" style="display: none;">
                <button class="dropdown-link" onclick="loadPHP('../main/purchasing/purchase-order.php')">Purchase Order</button>
                <button class="dropdown-link" onclick="loadPHP('../main/purchasing/requested-material.php')">Requested Material</button>
                <button class="dropdown-link" onclick="loadPHP('../main/purchasing/requested-purchase.php')">Requested Purchase</button>
            </div>
        </div>

        <!-- INSTALLATION -->
        <div class="modules">
            <button class="module-grp" onclick="toggleDropdown(this)">
                Installation
                <span class="arrow">&#9660;</span>
            </button>
            <div class="dropdown" style="display: none;">
                <button class="dropdown-link" onclick="loadPHP('../main/Installation/installation-request-material.php')">Request Material</button>
            </div>
        </div>

        <div class="modules">
            <button class="module-name" onclick="loadPHP('bill-of-materials.php')">Bill of Materials</button>
        </div>
        <div class="modules">
            <button class="module-name" onclick="loadPHP('projects.php')">Projects</button>
        </div>
        <div class="modules">
            <button class="module-name" onclick="loadPHP('reports.php')">Reports</button>
        </div>
        <div class="modules">
            <button class="module-name" onclick="loadPHP('activity-logs.php')">Activity Logs</button>
        </div>
        <div class="modules">
            <button class="module-name" onclick="loadPHP('user.php')">User Management</button>
        </div>
        <div class="modules">
            <button class="module-name" onclick="loadPHP('company.php')">Company</button>
        </div>
        <div class="modules">
            <button class="module-name debug" onclick="loadPHP('debug.php')">DEBUG</button>
        </div>
    </div>
</div>