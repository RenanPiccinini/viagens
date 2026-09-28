import os
import glob

html_replacement_start = """<a href="https://api.whatsapp.com/send?phone=51999239678&text=Ol%C3%A1%20gostaria%20de%20falar%20com%20um%20consultor%20da%20Exclusiva%20Viagens%20a%20respeito%20de.." target="_blank" style="text-decoration:none;" class="wws-popup__open-btn wws-popup__send-btn wws-shadow wws--text-color wws--bg-color">"""
html_replacement_end = """</a>\n\t\t<div class="wws-clearfix"></div>"""

for filepath in glob.glob('resources/views/*.blade.php'):
    with open(filepath, 'r') as f:
        content = f.read()
    
    # Replace the opening div with a
    content = content.replace('<div class="wws-popup__open-btn wws-popup__send-btn wws-shadow wws--text-color wws--bg-color">', html_replacement_start)
    
    # We need to replace the closing div that corresponds to wws-popup__open-btn
    # In the original, it looks like:
    # </svg> <span></span>
    # </div>
    # <div class="wws-clearfix"></div>
    # So we can replace:
    # </div>\n\t\t<div class="wws-clearfix"></div>
    # with
    # </a>\n\t\t<div class="wws-clearfix"></div>
    
    content = content.replace('</div>\n\t\t<div class="wws-clearfix"></div>', html_replacement_end)
    
    with open(filepath, 'w') as f:
        f.write(content)

print("Done fixing WhatsApp buttons.")
