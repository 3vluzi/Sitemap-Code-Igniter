<?php
header('Content-type: application/xml; charset="ISO-8859-1"', true);
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url() ?></loc>
        <lastmod><?php echo date('Y-m-d') ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.1</priority>
    </url>
</urlset>