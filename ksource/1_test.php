<script>
var p;
try {
p = new ActiveXObject('AcroExch.Document');
}
catch (e) {
// active x object could not be created
document.write('doesnt look like the PDF plugin is installed...');
}
if (p) {
    document.write('does look like the pdf plugin is installed!');
}
</script>