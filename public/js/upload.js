const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('file-input');
        const form = document.getElementById('upload-form');
        const preview = document.getElementById('preview');
        const submitBtn = document.getElementById('submit-btn');

        dropArea.addEventListener('click', () => fileInput.click());

        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.classList.add('hover');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('hover');
        });

        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dropArea.classList.remove('hover');

            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                showPreview(files);
            }
        });

        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 0) {
                showPreview(fileInput.files);
            }
        });

        function showPreview(files) {
            preview.innerHTML = '';
            Array.from(files).forEach(file => {
                const reader = new FileReader();
                reader.onload = e => {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('preview-img');
                    preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
            submitBtn.style.display = 'inline-block';
        }