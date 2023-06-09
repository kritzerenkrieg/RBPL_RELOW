TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `kurangStok` AFTER INSERT ON `stok_keluar` FOR EACH ROW BEGIN\n    -- Calculate the new stock value\n    SET @new_stock := (SELECT stok - NEW.jumlah FROM stocks WHERE id_barang = NEW.id_barang AND id_gudang = NEW.id_gudang AND id = NEW.id);\n\n    -- Update the stocks table only if the new stock value is not negative\n    IF (@new_stock >= 0) THEN\n        UPDATE stocks\n        SET stok = @new_stock\n        WHERE id_barang = NEW.id_barang\n        AND id_gudang = NEW.id_gudang\n        AND id = NEW.id;\n    ELSE\n        -- You can handle the case when the stock becomes negative here\n        -- For example, you can throw an error or log a warning\n        -- This example throws an error message\n        SIGNAL SQLSTATE \'45000\'\n            SET MESSAGE_TEXT = \'Insufficient stock.\';\n    END IF;\nEND'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci'
created=168620769705
