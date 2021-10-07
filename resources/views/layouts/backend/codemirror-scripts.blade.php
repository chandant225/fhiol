<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/xml/xml.min.js" integrity="sha512-UWfBe6aiZInvbBlm91IURVHHTwigTPtM3M4B73a8AykmxhDWq4EC/V2rgUNiLgmd/i0y0KWHolqmVQyJ35JsNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/css/css.min.js" integrity="sha512-UB/NeigW3LreuA/sHVVcykCf2FzhzHlk0BpsanfK8VmvvLFLUof1ysy1hCOYhyqlfCY8HW7w8qh/rsUJZLMpIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/htmlmixed/htmlmixed.min.js" integrity="sha512-IC+qg9ITjo2CLFOTQcO6fBbvisTeJmiT5D5FnXsCptqY8t7/UxWhOorn2X+GHkoD1FNkyfnMJujt5PcB7qutyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/javascript/javascript.min.js" integrity="sha512-DJ/Flq7rxJDDhgkO49H/rmidX44jmxWot/ku3c+XXEF9XFal78KIpu7w6jEaQhK4jli1U3/yOH+Rp3cIIEYFPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/addon/hint/html-hint.min.js" integrity="sha512-oxBKDzXElkyh3mQC/bKA/se1Stg1Q6fm7jz7PPY2kL01jRHQ64IwjpZVsuZojcaj5g8eKSMY9UJamtB1QR7Dmw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Codemirror: extensions --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/addon/edit/closetag.min.js" integrity="sha512-ZUq/bxUHwC35d3oP1hC5lshiHFCnI3dDtDPtSp9+CQDy/YU0LQu2ujDd603LuWho0G4XH8MSvyLV47x2Zcd8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/addon/scroll/simplescrollbars.min.js" integrity="sha512-HbaqNZHZLix+FaENPr62o07Q2G46VYUDCLZyxo5fPE0lN1EIpncArGlznYfLu+q0Vy7eTR+EBcW23FypU+Jqpw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // var coderMirrorElements = document.getElementsByClassName('html-editor');
    var coderMirrorElements = document.querySelectorAll(
        "textarea.html-editor"
    );
    console.log(coderMirrorElements);
    for (let editor of coderMirrorElements) {
        CodeMirror.fromTextArea(editor, {
            value: editor.value
            , mode: "htmlmixed"
            , theme: "material-palenight"
            , lineNumbers: true
            , autoCloseTags: true
            , autoCloseBrackets: true,
            scrollbarStyle: "overlay"
        , }).setSize("100%", "100%");
    }

</script>
