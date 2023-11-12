import ClipboardJS from "clipboard";

export default (params) => ({
    code: false,
    copy: false,
    block: params?.block ?? true,
    init() {
        this.initClipboard();
    },
    toggleCode() {
        this.code = !this.code;
    },
    initClipboard() {
        if (!this.$refs.copy) return;

        this.setCodeBlockId();

        const clipboard = new ClipboardJS(this.$refs.copy);

        clipboard.on("success", (element) => {
            this.copy = true;

            element.clearSelection();

            setTimeout(() => {
                this.copy = false;
            }, 2000);
        });
    },
    setCodeBlockId() {
        const codeId = `code${Math.random().toString(36).slice(2)}`;

        const element = this.block
            ? this.$refs.code.querySelector("code")
            : this.$refs.code;

        element.setAttribute("id", codeId);

        this.$refs.copy.dataset.clipboardTarget = `#${codeId}`;
    },
});
