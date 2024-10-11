<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Material</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="body-iframe-padding">
    <div class="header">
        <h1 class="header-title">Production > Request Return</h1>

        <!-- Dito lahat ng content for Create Excess Return -->
        <button onclick="parent.postMessage('production-openCreateReturn', '*');" class="btn-create">+ Create Return</button>
    </div>

    <div class="module-content">
        <div class="entries">
            <span>Show
                <input class="entry-num" type="int" value="0">
                Entries</span>
        </div>

        <div class="blue-bar">
            <h1 class="module-title">Return List</h1>
            <div class="table-bg">
                <table class="table-list-request">

                    <thead class="column-title">
                        <tr class="th-style">
                            <th class="th-status">Status</th>
                            <th class="th-return-ID">Return ID</th>
                            <th class="th-proj-name">Project Name</th>
                            <th class="th-reason">Reason</th>
                            <th class="th-date">Date Requested</th>
                            <th class="th-date">Date Processed</th>
                            <th class="th-date">Date Returned</th>
                            <th class="th-req-by">Requested by</th>
                            <th class="th-feedback">Feedback</th>
                            <th class="th-action">Action</th>
                        </tr>
                    </thead>

                    <tbody class="td-style">

                        <!-- EXCESS UPDATE -->
                        <tr>
                            <td class="td-status status pending">
                                <span class="circle-color-pending"><i class="fa-solid fa-circle circle-pending"></i>
                                    Pending
                                </span>
                            </td>
                            <td class="td-return-ID">Exc_0001</td>
                            <td class="td-proj-name">PRJ#02</td>
                            <td class="td-reason">Excess</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">-</td>
                            <td class="td-date">-</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-feedback">Icon</td>
                            <td class="td-action">
                                <button class="edit-button update-exc-pending-button" onclick="parent.postMessage('updateExcPending','*')"><i
                                        class="btnEdit fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-button" onclick="actionDelete()"><i
                                        class="btnDelete fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                        <!-- EXCESS VIEW IN-PROCESS -->
                        <tr>
                            <td class="td-status status approved">
                                <span class="circle-color-approved"><i class="fa-solid fa-circle circle-approved"></i>
                                    In-Process
                                </span>
                            </td>
                            <td class="td-return-ID">Exc_0002</td>
                            <td class="td-proj-name">PRJ#01</td>
                            <td class="td-reason">Excess</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">-</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-feedback">Icon</td>
                            <td class="td-action">
                                <button class="view-button view-inprocess-exc-button" onclick="parent.postMessage('viewInProcessExc','*')"><i class="btnView fa-solid fa-eye"></i></i></button>
                            </td>
                        </tr>

                        <!-- EXCESS VIEW COMPLETE -->
                        <tr>
                            <td class="td-status status completed">
                                <span class="circle-color-completed"><i class="fa-solid fa-circle circle-completed"></i>
                                    Completed
                                </span>
                            </td>
                            <td class="td-return-ID">Exc_0003</td>
                            <td class="td-proj-name">PRJ#02</td>
                            <td class="td-reason">Excess</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-feedback">Icon</td>
                            <td class="td-action">
                                <button class="view-button view-complete-exc-button" onclick="parent.postMessage('viewCompleteExc','*')"><i class="btnView fa-solid fa-eye"></i></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
    </div>

</body>

</html>