<!-- SET QUANTITY LEVEL MODAL -->
<div id="set-quantity-level-modal" class="modal">
    <div class="text-font set-quantity-container">
        <div class="set-quantity-header">
            <span class="set-quantity-title"></span>
            <span class="close">&times;</span>
        </div>
        <div class="set-quantity-content">
            <span>Quantity:</span>
            <input class="input setQuantityLevel" type="number" placeholder="0">
        </div>
        <div class="set-quantity-button">
            <button class="button-modal set-quantity">Confirm</button>
        </div>
    </div>
</div>

<!-- SUCCESS NOTIFICATION -->
<div id="notification-success-modal" class="modal">
    <div class="notification-success-content">
        <label class="checkmark-logo">&#9989;</label>
        <span class="success-text">SUCCESS &#128077;</span>
        <span class="desc-text">Click continue to move to the next step.</span>
        <button class="continue-button">CONTINUE</button>
    </div>
</div>

<!-- CREATE CLIENT MODAL -->
<!-- CREATE CLIENT MODAL -->
<!-- CREATE CLIENT MODAL -->
<div id="create-client-modal" class="modal">
    <div class="client-modal">
        <div class="header-bar">
            <h1>Create New Client</h1><span class="close">&times;</span>
        </div>
        <div class="module-title">
            <div class="client-content">
                <div class="inputs-top-row">
                    <div class="input-grp">
                        <span class="input-label">Client ID:</span>
                        <input class="input clientID" type="text" value="Client_01" disabled>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Client Name:</span>
                        <input class="input client-name" type="text" placeholder="Enter Client Name">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Telephone:</span>
                        <input class="input telephone" type="tel" placeholder="#">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Phone:</span>
                        <input class="input phone" type="tel" placeholder="#">
                    </div>
                </div>
                <div class="inputs-bottom-row">
                    <div class="input-grp">
                        <span class="input-label">Email:</span>
                        <input class="input email" type="email" placeholder="Enter Client Email">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Location:</span>
                        <input class="input location" type="tel" placeholder="Address">
                    </div>
                </div>
                <div class="client-button-container">
                    <button class="button-modal client">Add
                        Client</button>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- EDIT CLIENT MODAL -->
<!-- EDIT CLIENT MODAL -->
<!-- EDIT CLIENT MODAL -->
<div id="edit-client-modal" class="modal">
    <div class="client-modal">
        <div class="header-bar">
            <h1>Edit Client Details</h1><span class="close">&times;</span>
        </div>
        <div class="module-title">
            <div class="client-content">
                <div class="inputs-top-row">
                    <div class="input-grp">
                        <span class="input-label">Client ID:</span>
                        <input class="input clientID" type="text" value="Client_01" disabled>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Client Name:</span>
                        <input class="input client-name" type="text" placeholder="Enter Client Name">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Telephone:</span>
                        <input class="input telephone" type="tel" placeholder="#">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Phone:</span>
                        <input class="input phone" type="tel" placeholder="#">
                    </div>
                </div>
                <div class="inputs-bottom-row">
                    <div class="input-grp">
                        <span class="input-label">Email:</span>
                        <input class="input email" type="email" placeholder="Enter Client Email">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Location:</span>
                        <input class="input location" type="tel" placeholder="Address">
                    </div>
                </div>
                <div class="client-button-container">
                    <button class="button-modal edit">Save
                        Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- CREATE SUPPLIER MODAL -->
<!-- CREATE SUPPLIER MODAL -->
<!-- CREATE SUPPLIER MODAL -->
<div id="create-supplier-modal" class="modal">
    <div class="client-modal">
        <div class="header-bar">
            <h1>Create New Supplier</h1><span class="close">&times;</span>
        </div>
        <div class="module-title">
            <div class="client-content">
                <div class="inputs-top-row">
                    <div class="input-grp">
                        <span class="input-label">Supplier ID:</span>
                        <input class="input clientID" type="text" value="Supplier_01" disabled>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Supplier Name:</span>
                        <input class="input client-name" type="text" placeholder="Enter Supplier Name">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Telephone:</span>
                        <input class="input telephone" type="tel" placeholder="#">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Phone:</span>
                        <input class="input phone" type="tel" placeholder="#">
                    </div>
                </div>
                <div class="inputs-bottom-row">
                    <div class="input-grp">
                        <span class="input-label">Email:</span>
                        <input class="input email" type="email" placeholder="Enter Supplier Email">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Location:</span>
                        <input class="input location" type="tel" placeholder="Address">
                    </div>
                </div>
                <div class="client-button-container">
                    <button class="supplierconfirm-btn"
                        onclick="parent.postMessage('openSupplierModule','*')">Add Supplier</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- EDIT SUPPLIER MODAL -->
<!-- EDIT SUPPLIER MODAL -->
<!-- EDIT SUPPLIER MODAL -->
<div id="edit-supplier-modal" class="modal">
    <div class="supplier-modal">
        <div class="header-bar">
            <h1>Edit Supplier Details</h1><span class="close">&times;</span>
        </div>
        <div class="module-title">
            <div class="client-content">
                <div class="inputs-top-row">
                    <div class="input-grp">
                        <span class="input-label">Status:</span>
                        <select class="input status">
                            <option value="0">Active</option>
                            <option value="1">In-active</option>
                        </select>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Supplier ID:</span>
                        <input class="input clientID" type="text" value="Supplier_01" disabled>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Supplier Name:</span>
                        <input class="input client-name" type="text" placeholder="Enter Supplier Name">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Telephone:</span>
                        <input class="input telephone" type="tel" placeholder="#">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Phone:</span>
                        <input class="input phone" type="tel" placeholder="#">
                    </div>
                </div>
                <div class="inputs-bottom-row">
                    <div class="input-grp">
                        <span class="input-label">Email:</span>
                        <input class="input email" type="email" placeholder="Enter Supplier Email">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Location:</span>
                        <input class="input location" type="tel" placeholder="Address">
                    </div>
                </div>
                <div class="client-button-container">
                    <button class="supplierbutton-modal"
                        onclick="parent.postMessage('openSupplierModule','*')">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ADD MATERIAL MODAL -->
<div id="add-material-modal" class="modal">
    <div class="text-font add-material-container">
        <div class="add-material-header">
            <span class="add-material-title">Add Materials</span>
            <span class="close">&times;</span>
        </div>
        <div class="add-material-content">
            <div class="material-content-container">
                <span>Material Description:</span>
                <input class="input materialID" type="text" placeholder="Enter Material">
            </div>
        </div>
        <div class="add-material-content">
            <div class="material-content-container">
                <span>Unit:</span>
                <input class="input materialUnit" type="text" placeholder="Unit" disabled>
            </div>
            <div class="material-content-container">
                <span>Supplier:</span>
                <input class="input materialSupplier" type="text" placeholder="Supplier Name" disabled>
            </div>
        </div>
        <div class="add-material-button">
            <button class="button-modal">Confirm</button>
        </div>
    </div>
</div>

<!-- PRODUCTION -->
<!-- REQUEST RETURN, EXCESS & DEFECTIVE BUTTON MODAL -->
<div id="create-return-modal" class="modal">

    <div class="cr-modal-content">
        <p class="cr-blue-bar">Select Reason of Request Return <span class="close">&times;</span></p>
        <div class="cr-button-container">
            <button id="excessBtn" class="excess-button">Excess</button>
            <button id="defectiveBtn" class="defective-button">Defective</button>
        </div>
    </div>
</div>


<!-- VIEW PRODUCTION APPROVED SUMMARY LIST -->
<div id="viewProduction-requestMaterial-approved" class="modal">
    <div class="view-production-content">
        <div class="item-summary-header">
            <span>Approved Requested Material Summary</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <div class="batch-container">
            <div class="batch-header">
                Batch Details
            </div>
            <div class="batch-content">
                <span>
                    Batch: <input class="batchID" type="text" placeholder="Batch_001" disabled>
                </span>
                <span>
                    Expected Delivery Date: <span>MM/DD/YYYY</span>
                </span>
                <span>
                    Date Delivered: <span>MM/DD/YYYY</span>
                </span>
            </div>
        </div>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Material Description</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Available Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Consumables/Hardware</td>
                    <td class="">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED (65KGS / 500,000
                        CYCLES)
                    </td>
                    <td class="">PC/S</td>
                    <td class="">100</td>
                    <td class="">100000</td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
            <div class="pageBar">
                <div class="pageContainer">
                    <p class="pageText">Showing
                        <a class="page1">1</a>
                        to
                        <a class="page2">60</a>
                        of
                        <a class="ent-total">69</a>
                        entries
                    </p>
                    <div class="pageBtn">
                        <p class="btnPrev">Previous</p>
                        <a id="pageNum">1</a>
                        <a id="pageNum">2</a>
                        <a id="pageNum">3</a>
                        <a id="pageNum">4</a>
                        <a id="pageNum">5</a>
                        <p class="btnNext">Next</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- VIEW PRODUCTION COMPLETED SUMMARY LIST-->
<div id="viewProduction-requestMaterial-completed" class="modal">
    <div class="view-production-content">
        <div class="item-summary-header">
            <span>Completed Requested Material Summary</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <div class="batch-container">
            <div class="batch-header">
                Batch Details
            </div>
            <div class="batch-content">
                <span>
                    Batch: <input class="batchID" type="text" placeholder="Batch_001" disabled>
                </span>
                <span>
                    Expected Delivery Date: <span>MM/DD/YYYY</span>
                </span>
                <span>
                    Date Delivered: <span>MM/DD/YYYY</span>
                </span>
            </div>
        </div>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Material Description</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Available Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Consumables/Hardware</td>
                    <td class="">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED (65KGS / 500,000
                        CYCLES)
                    </td>
                    <td class="">PC/S</td>
                    <td class="">100</td>
                    <td class="">100000</td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
            <div class="pageBar">
                <div class="pageContainer">
                    <p class="pageText">Showing
                        <a class="page1">1</a>
                        to
                        <a class="page2">60</a>
                        of
                        <a class="ent-total">69</a>
                        entries
                    </p>
                    <div class="pageBtn">
                        <p class="btnPrev">Previous</p>
                        <a id="pageNum">1</a>
                        <a id="pageNum">2</a>
                        <a id="pageNum">3</a>
                        <a id="pageNum">4</a>
                        <a id="pageNum">5</a>
                        <p class="btnNext">Next</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- UNLABELED MATERIALS MODAL -->
<div id="unlabeled-materials-modal" class="modal">
    <div class="unlabeled-material-content">
        <div class="item-summary-header">
            <span>Unlabeled Materials</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
                <button class="button-modal save">Save and Confirm</button>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Material Description</th>
                    <th>Unit</th>
                    <th>Cost</th>
                    <th>Available Quantity</th>
                    <th>Alert Quantity Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Consumables/Hardware</td>
                    <td class="">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED (65KGS / 500,000
                        CYCLES)
                    </td>
                    <td class="">PC/S</td>
                    <td class="">100</td>
                    <td class="">500</td>
                    <td class="">250</td>
                    <td class=""><button class="setAlertLevel fa-solid fa-pen-to-square"
                            onclick="parent.postMessage('setQuantity-actionBtn','*')"></td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
            <div class="pageBar">
                <div class="pageContainer">
                    <p class="pageText">Showing
                        <a class="page1">1</a>
                        to
                        <a class="page2">60</a>
                        of
                        <a class="ent-total">69</a>
                        entries
                    </p>
                    <div class="pageBtn">
                        <p class="btnPrev">Previous</p>
                        <a id="pageNum">1</a>
                        <a id="pageNum">2</a>
                        <a id="pageNum">3</a>
                        <a id="pageNum">4</a>
                        <a id="pageNum">5</a>
                        <p class="btnNext">Next</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INVENTORY START RELEASE MATERIALS MODAL -->
<div id="start-release-materials-modal" class="modal">
    <div class="start-release-material-content">
        <div class="item-summary-header">
            <span>Release Material</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <span class="label style">Batch ID:</span>
        <input class="input batchID" type="number" placeholder="Bat_0001" disabled>
        <span class="label style">Release Date:</span>
        <input class="input releasedDate" type="number" placeholder="MM/DD/YYYY" disabled>
        <button class="button-modal"><i class="fa-solid fa-qrcode"></i></button>
        <!-- QR SCANNER WALA PA FUNCTION -->
        <button class="button-modal">Upload</button> <!-- UPLOAD WALA PA FUNCTION -->
        <button class="button-modal saveBtn">Save</button>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th class="th-category">Category</th>
                    <th class="th-material-description">Material Description</th>
                    <th class="th-unit">Unit</th>
                    <th class="th-supplier">Supplier</th>
                    <th class="th-remaining">Remaining</th>
                    <th class="th-release">Release</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="td-category">Consumables/Hardware</td>
                    <td class="td-material-description">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                        (65KGS / 500,000 CYCLES)
                    </td>
                    <td class="td-unit">PC/S</td>
                    <td class="td-supplier">100</td>
                    <td class="td-remaining">10</td>
                    <td class="td-released"><input class="td-release-no" type="number" value="0"></td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
            <div class="pageBar">
                <div class="pageContainer">
                    <p class="pageText">Showing
                        <a class="page1">1</a>
                        to
                        <a class="page2">60</a>
                        of
                        <a class="ent-total">69</a>
                        entries
                    </p>
                    <div class="pageBtn">
                        <p class="btnPrev">Previous</p>
                        <a id="pageNum">1</a>
                        <a id="pageNum">2</a>
                        <a id="pageNum">3</a>
                        <a id="pageNum">4</a>
                        <a id="pageNum">5</a>
                        <p class="btnNext">Next</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INVENTORY RELEASED MATERIALS MODAL -->
<div id="released-materials-modal" class="modal">
    <div class="start-release-material-content">
        <div class="item-summary-header">
            <span>Released Material</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <span class="label style">Batch ID:</span>
        <input class="input batchID" type="number" placeholder="Bat_0001" disabled>
        <span class="label style">Released Date:</span>
        <input class="input releasedDate" type="number" placeholder="MM/DD/YYYY" disabled>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th class="th-category">Category</th>
                    <th class="th-material-description">Material Description</th>
                    <th class="th-unit">Unit</th>
                    <th class="th-supplier">Supplier</th>
                    <th class="th-remaining">Remaining</th>
                    <th class="th-released">Released</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="td-category">Consumables/Hardware</td>
                    <td class="td-material-description">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED
                        (65KGS / 500,000 CYCLES)
                    </td>
                    <td class="td-unit">PC/S</td>
                    <td class="td-supplier">100</td>
                    <td class="td-remaining">10</td>
                    <td class="td-released">10</td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
            <div class="pageBar">
                <div class="pageContainer">
                    <p class="pageText">Showing
                        <a class="page1">1</a>
                        to
                        <a class="page2">60</a>
                        of
                        <a class="ent-total">69</a>
                        entries
                    </p>
                    <div class="pageBtn">
                        <p class="btnPrev">Previous</p>
                        <a id="pageNum">1</a>
                        <a id="pageNum">2</a>
                        <a id="pageNum">3</a>
                        <a id="pageNum">4</a>
                        <a id="pageNum">5</a>
                        <p class="btnNext">Next</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INVENTORY -->
<!-- DELIVERY ITEM SUMMARY MODAL -->
<div id="view-delivery-summary-modal" class="modal">
    <div class="view-delivery-content">
        <div class="item-summary-header">
            <span>Delivered Material Summary</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Material Description</th>
                    <th>Unit</th>
                    <th>Delivered Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Consumables/Hardware</td>
                    <td class="">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED (65KGS / 500,000
                        CYCLES)
                    </td>
                    <td class="">PC/S</td>
                    <td class="">100</td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
            <div class="pageBar">
                <div class="pageContainer">
                    <p class="pageText">Showing
                        <a class="page1">1</a>
                        to
                        <a class="page2">60</a>
                        of
                        <a class="ent-total">69</a>
                        entries
                    </p>
                    <div class="pageBtn">
                        <p class="btnPrev">Previous</p>
                        <a id="pageNum">1</a>
                        <a id="pageNum">2</a>
                        <a id="pageNum">3</a>
                        <a id="pageNum">4</a>
                        <a id="pageNum">5</a>
                        <p class="btnNext">Next</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INSTALLATION MODAL-->
<!-- REQUEST ITEM SUMMARY MODAL -->
<div id="request-item-summary-modal" class="modal">
    <div class="view-installation-content">
        <div class="item-summary-header">
            <span>Requested Material Summary</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Material Description</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Available Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Consumables/Hardware</td>
                    <td class="">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED (65KGS / 500,000
                        CYCLES)
                    </td>
                    <td class="">PC/S</td>
                    <td class="">100</td>
                    <td class="">100000</td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
            <div class="pageBar">
                <div class="pageContainer">
                    <p class="pageText">Showing
                        <a class="page1">1</a>
                        to
                        <a class="page2">60</a>
                        of
                        <a class="ent-total">69</a>
                        entries
                    </p>
                    <div class="pageBtn">
                        <p class="btnPrev">Previous</p>
                        <a id="pageNum">1</a>
                        <a id="pageNum">2</a>
                        <a id="pageNum">3</a>
                        <a id="pageNum">4</a>
                        <a id="pageNum">5</a>
                        <p class="btnNext">Next</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INSTALLATION MODAL-->
<!-- RETURN ITEM SUMMARY MODAL -->
<div id="return-item-summary-modal" class="modal">
    <div class="view-installation-content">
        <div class="item-summary-header">
            <span>Defected Return Summary</span>
            <span class="close closeBtn" id="close-item-summary">&times;</span>
        </div>
        <div class="modal-show-entries">
            <div class="entries">
                <span>Show
                    <input class="entry-num" type="int" value="0">
                    Entries</span>
            </div>
        </div>
        <table class="item-summary-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Material Description</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Available Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Consumables/Hardware</td>
                    <td class="">YANK CONCEALED DOOR CLOSER W/ HOLD OPEN Y380 NON-HANDED (65KGS / 500,000
                        CYCLES)
                    </td>
                    <td class="">PC/S</td>
                    <td class="">100</td>
                    <td class="">100000</td>
                </tr>
            </tbody>
        </table>
        <div class="modal-page">
            <div class="showing-entries">
                <span>Showing</span>
                <span>1</span>
                <span>to</span>
                <span>1</span>
                <span>of</span>
                <span>1</span>
                <span>entries</span>
            </div>
            <div class="pageBar">
                <div class="pageContainer">
                    <p class="pageText">Showing
                        <a class="page1">1</a>
                        to
                        <a class="page2">60</a>
                        of
                        <a class="ent-total">69</a>
                        entries
                    </p>
                    <div class="pageBtn">
                        <p class="btnPrev">Previous</p>
                        <a id="pageNum">1</a>
                        <a id="pageNum">2</a>
                        <a id="pageNum">3</a>
                        <a id="pageNum">4</a>
                        <a id="pageNum">5</a>
                        <p class="btnNext">Next</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>