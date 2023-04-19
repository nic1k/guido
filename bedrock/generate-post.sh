#!/bin/sh
#wp
wp post generate --post_type=page --post_title=Homepage --allow-root --count=1

#woocommerce
wp post generate --post_type=page --post_title=Regulamin --allow-root --count=1
wp post generate --post_type=page --post_title=Kontakt --allow-root --count=1





#curl -N https://loripsum.net/api/5 | wp post generate --post_content --count=10