<form id="search-form" class="search-location mt-md-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 align-items-end">
            <div class="form-group">
                <div class="form-field">
                    <input type="text" id="search-input" class="form-control" placeholder="Search">
                    <button type="submit"><span class="ion-ios-search"></span></button>
                </div>
            </div>
        </div>
    </div>
</form>
<style>
    .highlight {
        background-color: yellow;
        font-weight: bold;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.getElementById('search-form');
        const searchInput = document.getElementById('search-input');

        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const searchTerm = searchInput.value.trim().toLowerCase();
            if (searchTerm) {
                performSearch(searchTerm);
            }
        });

        function performSearch(searchTerm) {
            // Remove previous highlights
            removeHighlights();

            // Find and highlight matches
            const regex = new RegExp(`\\b${searchTerm}\\w*`, 'gi');
            const textNodes = getTextNodes(document.body);
            let matchCount = 0;
            let firstMatch = null;

            textNodes.forEach(node => {
                const matches = node.textContent.match(regex);
                if (matches) {
                    const fragment = document.createDocumentFragment();
                    let lastIndex = 0;
                    node.textContent.replace(regex, function(match, index) {
                        fragment.appendChild(document.createTextNode(node.textContent.slice(
                            lastIndex, index)));
                        const span = document.createElement('span');
                        span.className = 'highlight';
                        span.textContent = match;
                        fragment.appendChild(span);
                        lastIndex = index + match.length;
                        matchCount++;
                        if (!firstMatch) firstMatch = span;
                        return match;
                    });
                    fragment.appendChild(document.createTextNode(node.textContent.slice(lastIndex)));
                    node.parentNode.replaceChild(fragment, node);
                }
            });

            if (matchCount > 0) {
                alert(`Highlighted ${matchCount} matches.`);
                // Scroll to the first match
                if (firstMatch) {
                    firstMatch.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            } else {
                alert('No matches found.');
            }
        }

        function removeHighlights() {
            document.querySelectorAll('.highlight').forEach(el => {
                el.outerHTML = el.textContent;
            });
        }

        function getTextNodes(node) {
            const textNodes = [];
            const walker = document.createTreeWalker(node, NodeFilter.SHOW_TEXT, null, false);
            let currentNode;
            while (currentNode = walker.nextNode()) {
                if (currentNode.parentNode.nodeName !== 'SCRIPT' && currentNode.parentNode.nodeName !==
                    'STYLE') {
                    textNodes.push(currentNode);
                }
            }
            return textNodes;
        }
    });
</script>
