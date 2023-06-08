TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `tambahStok` AFTER INSERT ON `stok_masuk` FOR EACH ROW BEGIN\n    -- Check if the combination of id_barang and id_gudang already exists\n    IF EXISTS (\n        SELECT 1\n        FROM stocks\n        WHERE id_barang = NEW.id_barang\n        AND id_gudang = NEW.id_gudang\n        AND id = NEW.id\n    ) THEN\n        -- Update the existing row in the stocks table\n        UPDATE stocks\n        SET stok = stok + NEW.jumlah\n        WHERE id_barang = NEW.id_barang\n        AND id_gudang = NEW.id_gudang\n        AND id = NEW.id;\n    ELSE\n        -- Insert a new row into the stocks table\n        INSERT INTO stocks (id, id_barang, stok, id_gudang)\n        VALUES (NEW.id, NEW.id_barang, NEW.jumlah, NEW.id_gudang);\n    END IF;\nEND'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci'
created=168620771742
