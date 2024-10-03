function setPHTDateTime() {
    const now = new Date();

    // Get the UTC time and add 8 hours for GMT+8
    now.setHours(now.getUTCHours() + -8);

    // Format the date to 'YYYY-MM-DDTHH:MM' for the datetime-local input
    const formattedDateTime = now.toISOString().slice(0, 16);

    // Set the value of the input
    document.getElementById('dateTimeInput').value = formattedDateTime;
}

// Call the function to set the date and time
setPHTDateTime();
