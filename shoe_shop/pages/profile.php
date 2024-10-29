<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Management</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; }
        .container { width: 80%; margin: 50px auto; padding: 20px; background: #fff; }
        h1 { text-align: center; color: #333; }
        .profile-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
        .profile-card { position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background: #fff; text-align: center; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .profile-img { width: 80px; height: 80px; border-radius: 50%; margin-bottom: 15px; }
        .profile-info { font-size: 16px; color: #333; margin: 5px 0; }
        .profile-actions { margin-top: 15px; }
        .profile-actions button { padding: 6px 12px; cursor: pointer; border: none; border-radius: 4px; margin: 0 5px; }
        .edit { background-color: #FFA726; color: white; }
        .delete { background-color: #E57373; color: white; }
        .editable { background-color: #e0f7fa; }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Account Management</h1>
        <div class="profile-grid">
            <!-- User Profile Cards -->
            <div class="profile-card">
                <img src="../asset/mem.4.jpg" alt="Profile" class="profile-img">
                <div class="profile-info" contenteditable="false">ID: 1</div>
                <div class="profile-info" contenteditable="false">Nilujan</div>
                <div class="profile-info" contenteditable="false">nilu.j@example.com</div>
                <div class="profile-info" contenteditable="false">Role: Admin</div>
                <div class="profile-actions">
                    <button class="edit" onclick="editProfile(this)">Edit</button>
                    <button class="delete" onclick="deleteProfile(this)">Delete</button>
                </div>
            </div>
            <div class="profile-card">
                <img src="../asset/mem3.jpg" alt="Profile" class="profile-img">
                <div class="profile-info" contenteditable="false">ID: 2</div>
                <div class="profile-info" contenteditable="false">Kumudhini</div>
                <div class="profile-info" contenteditable="false">kumu.m@example.com</div>
                <div class="profile-info" contenteditable="false">Role: Editor</div>
                <div class="profile-actions">
                    <button class="edit" onclick="editProfile(this)">Edit</button>
                    <button class="delete" onclick="deleteProfile(this)">Delete</button>
                </div>
            </div>
            <div class="profile-card">
                <img src="../asset/mem2.jpg" alt="Profile" class="profile-img">
                <div class="profile-info" contenteditable="false">ID: 3</div>
                <div class="profile-info" contenteditable="false">Niroshanee</div>
                <div class="profile-info" contenteditable="false">niro.c@example.com</div>
                <div class="profile-info" contenteditable="false">Role: Viewer</div>
                <div class="profile-actions">
                    <button class="edit" onclick="editProfile(this)">Edit</button>
                    <button class="delete" onclick="deleteProfile(this)">Delete</button>
                </div>
            </div>
            <div class="profile-card">
                <img src="../asset/mem1.jpg" alt="Profile" class="profile-img">
                <div class="profile-info" contenteditable="false">ID: 4</div>
                <div class="profile-info" contenteditable="false">Madivadanee</div>
                <div class="profile-info" contenteditable="false">mathi.l@example.com</div>
                <div class="profile-info" contenteditable="false">Role: Viewer</div>
                <div class="profile-actions">
                    <button class="edit" onclick="editProfile(this)">Edit</button>
                    <button class="delete" onclick="deleteProfile(this)">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function editProfile(button) {
            const card = button.closest('.profile-card');
            const infoFields = card.querySelectorAll('.profile-info');
            const isEditing = button.textContent === 'Save';

            infoFields.forEach(field => {
                if (!field.textContent.startsWith('ID:')) { // Exclude ID field from editing
                    field.contentEditable = !isEditing;
                    field.classList.toggle('editable', !isEditing);
                }
            });

            button.textContent = isEditing ? 'Edit' : 'Save';
        }

        function deleteProfile(button) {
            const card = button.closest('.profile-card');
            card.remove();
        }
    </script>
</body>
</html>
