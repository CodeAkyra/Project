<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier</title>
</head>

<body>
    <div class="header">
        <h1 class="header-title">Supplier Records</h1>
        <button class="btn-create" id="create-new-supplierBtn" onclick="parent.postMessage('openCreateSupplierModal', '*')">Create New Supplier</button>
    </div>

    <div class="module-content">
        <div class="entries">
            <span>Show
                <input type="int" value="0" class="entry-num">
                Entries
            </span>
        </div>

        <div class="blue-bar">
            <h1 class="module-title">Supplier Records</h1>
            <div class="table-bg">
                <table class="table-list-request">

                    <!-- Hindi muna aq nag lagay ng mga class / ID masyado -->
                    <thead class="column-title">
                        <tr class="th-style">
                            <th>Status</th>
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>Telephone</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody class="td-style">
                        <tr>
                            <td class="td-status"><span class="circle-color-active"><i class="fa-solid fa-circle circle-active"></i> Active</span></td>
                            <td class="td-style">Supplier_01</td>
                            <td class="td-style">Supplier_Name_1</td>
                            <td class="td-style">123-456-789</td>
                            <td class="td-style">0987654321</td>
                            <td class="td-style">supplier @gmail.com</td>
                            <td class="td-style">Antipolo, Rizal</td>
                            <td class="td-action">
                                <button class="edit-button" onclick="parent.postMessage('openEditSupplierModal', '*')"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                                <button class="archive-button"><i class="btnArchive fa-solid fa-box-archive"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="td-status"><span class="circle-color-inactive"><i class="fa-solid fa-circle circle-inactive"></i> In-active</span></td>
                            <td class="td-style">Supplier_02</td>
                            <td class="td-style">Supplier_Name_2</td>
                            <td class="td-style">123-456-789</td>
                            <td class="td-style">0987654321</td>
                            <td class="td-style">supplier@gmail.com</td>
                            <td class="td-style">Antipolo, Rizal</td>
                            <td class="td-action">
                                <button class="edit-button" onclick="parent.postMessage('openEditSupplierModal', '*')"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                                <button class="archive-button"><i class="btnArchive fa-solid fa-box-archive"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- PAGES -->
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
</body>

</html>