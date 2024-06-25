function redirect(websiteUrl) {
    window.location.href = websiteUrl;
}

function deleteUser(id) {
    var confirmDelete = confirm("Are you sure you want to delete this user?");
    
    if (confirmDelete) {
        $.ajax({
            type: 'post',
            url: 'user.php',
            data: {
                deleteuserbtn: 'true',
                id: id
            },
            success: function(response) {
                console.log(response);
                redirect('userList.php');
            },
            error: function(xhr, status, error) {
                console.log('Error: Failed to delete user');
                console.error('Error:', error);
            }
        });
    }
}

function downloadPDF(id) {
    var pdfUrl = 'viewer.php?file=' + id + '.pdf';
    var fileName = id + '.pdf';
    fetch(pdfUrl)
        .then(response => response.blob())
        .then(blob => {
            var blobUrl = window.URL.createObjectURL(blob);
            var a = document.createElement('a');
            a.href = blobUrl;
            a.download = fileName;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        })
        .catch(error => console.error('Error downloading PDF:', error));
}