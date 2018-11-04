<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class selling
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.components = New System.ComponentModel.Container
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(selling))
        Me.Label1 = New System.Windows.Forms.Label
        Me.Button2 = New System.Windows.Forms.Button
        Me.Button1 = New System.Windows.Forms.Button
        Me.ComboBox4 = New System.Windows.Forms.ComboBox
        Me.ComboBox1 = New System.Windows.Forms.ComboBox
        Me.ComboBox3 = New System.Windows.Forms.ComboBox
        Me.ComboBox2 = New System.Windows.Forms.ComboBox
        Me.Button3 = New System.Windows.Forms.Button
        Me.DataGridView1 = New System.Windows.Forms.DataGridView
        Me.ItemnameDataGridViewTextBoxColumn = New System.Windows.Forms.DataGridViewTextBoxColumn
        Me.QuantityDataGridViewTextBoxColumn = New System.Windows.Forms.DataGridViewTextBoxColumn
        Me.PriceDataGridViewTextBoxColumn = New System.Windows.Forms.DataGridViewTextBoxColumn
        Me.BillBindingSource3 = New System.Windows.Forms.BindingSource(Me.components)
        Me.BillDataSourceDataSet4 = New Bengacount.BillDataSourceDataSet4
        Me.BillBindingSource2 = New System.Windows.Forms.BindingSource(Me.components)
        Me.BillDataSourceDataSet3 = New Bengacount.BillDataSourceDataSet3
        Me.StockBindingSource = New System.Windows.Forms.BindingSource(Me.components)
        Me.BillBindingSource1 = New System.Windows.Forms.BindingSource(Me.components)
        Me.BillDataSourceDataSet1 = New Bengacount.BillDataSourceDataSet1
        Me.BillDataSourceDataSet = New Bengacount.BillDataSourceDataSet
        Me.BillBindingSource = New System.Windows.Forms.BindingSource(Me.components)
        Me.BillTableAdapter = New Bengacount.BillDataSourceDataSetTableAdapters.BillTableAdapter
        Me.BillTableAdapter1 = New Bengacount.BillDataSourceDataSet1TableAdapters.BillTableAdapter
        Me.ComboBox5 = New System.Windows.Forms.ComboBox
        Me.UnitBindingSource = New System.Windows.Forms.BindingSource(Me.components)
        Me.BillDataSourceDataSet2 = New Bengacount.BillDataSourceDataSet2
        Me.UnitTableAdapter = New Bengacount.BillDataSourceDataSet2TableAdapters.unitTableAdapter
        Me.StockTableAdapter = New Bengacount.BillDataSourceDataSet3TableAdapters.stockTableAdapter
        Me.TextBox1 = New System.Windows.Forms.TextBox
        Me.Label2 = New System.Windows.Forms.Label
        Me.BillTableAdapter2 = New Bengacount.BillDataSourceDataSet3TableAdapters.BillTableAdapter
        Me.Button4 = New System.Windows.Forms.Button
        Me.Button5 = New System.Windows.Forms.Button
        Me.BillTableAdapter3 = New Bengacount.BillDataSourceDataSet4TableAdapters.BillTableAdapter
        Me.TableAdapterManager = New Bengacount.BillDataSourceDataSet4TableAdapters.TableAdapterManager
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.BillBindingSource3, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.BillDataSourceDataSet4, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.BillBindingSource2, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.BillDataSourceDataSet3, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.StockBindingSource, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.BillBindingSource1, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.BillDataSourceDataSet1, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.BillDataSourceDataSet, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.BillBindingSource, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.UnitBindingSource, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.BillDataSourceDataSet2, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Font = New System.Drawing.Font("Microsoft Sans Serif", 48.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label1.ForeColor = System.Drawing.Color.RoyalBlue
        Me.Label1.Location = New System.Drawing.Point(46, 18)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(184, 73)
        Me.Label1.TabIndex = 13
        Me.Label1.Text = "স্বাগতম"
        '
        'Button2
        '
        Me.Button2.BackColor = System.Drawing.Color.FromArgb(CType(CType(0, Byte), Integer), CType(CType(64, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.Button2.Cursor = System.Windows.Forms.Cursors.Hand
        Me.Button2.Font = New System.Drawing.Font("Microsoft Sans Serif", 18.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Button2.ForeColor = System.Drawing.Color.White
        Me.Button2.Location = New System.Drawing.Point(564, 109)
        Me.Button2.Name = "Button2"
        Me.Button2.Size = New System.Drawing.Size(165, 50)
        Me.Button2.TabIndex = 12
        Me.Button2.Text = "ফেরত যান" & Global.Microsoft.VisualBasic.ChrW(13) & Global.Microsoft.VisualBasic.ChrW(10)
        Me.Button2.UseVisualStyleBackColor = False
        '
        'Button1
        '
        Me.Button1.BackColor = System.Drawing.Color.FromArgb(CType(CType(0, Byte), Integer), CType(CType(64, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.Button1.Cursor = System.Windows.Forms.Cursors.Hand
        Me.Button1.Font = New System.Drawing.Font("Microsoft Sans Serif", 18.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Button1.ForeColor = System.Drawing.Color.White
        Me.Button1.Location = New System.Drawing.Point(564, 204)
        Me.Button1.Name = "Button1"
        Me.Button1.Size = New System.Drawing.Size(165, 50)
        Me.Button1.TabIndex = 11
        Me.Button1.Text = "পরবর্তী ধাপ"
        Me.Button1.UseVisualStyleBackColor = False
        '
        'ComboBox4
        '
        Me.ComboBox4.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.75!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.ComboBox4.FormattingEnabled = True
        Me.ComboBox4.Items.AddRange(New Object() {"সাবান", "সার্ফ", "কাপড় কাঁচা সাবান"})
        Me.ComboBox4.Location = New System.Drawing.Point(329, 166)
        Me.ComboBox4.Name = "ComboBox4"
        Me.ComboBox4.Size = New System.Drawing.Size(144, 33)
        Me.ComboBox4.TabIndex = 10
        '
        'ComboBox1
        '
        Me.ComboBox1.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.75!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.ComboBox1.FormattingEnabled = True
        Me.ComboBox1.Items.AddRange(New Object() {"কসমেটিক্স", "গ্রসারি", "ষ্টেশনারী"})
        Me.ComboBox1.Location = New System.Drawing.Point(86, 166)
        Me.ComboBox1.Name = "ComboBox1"
        Me.ComboBox1.Size = New System.Drawing.Size(144, 33)
        Me.ComboBox1.TabIndex = 9
        '
        'ComboBox3
        '
        Me.ComboBox3.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.75!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.ComboBox3.FormattingEnabled = True
        Me.ComboBox3.Items.AddRange(New Object() {"চাল", "তেল", "লবণ"})
        Me.ComboBox3.Location = New System.Drawing.Point(329, 166)
        Me.ComboBox3.Name = "ComboBox3"
        Me.ComboBox3.Size = New System.Drawing.Size(144, 33)
        Me.ComboBox3.TabIndex = 14
        '
        'ComboBox2
        '
        Me.ComboBox2.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.75!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.ComboBox2.FormattingEnabled = True
        Me.ComboBox2.Items.AddRange(New Object() {"ফেসওয়াশ", "ক্রিম", "পাওডার"})
        Me.ComboBox2.Location = New System.Drawing.Point(329, 166)
        Me.ComboBox2.Name = "ComboBox2"
        Me.ComboBox2.Size = New System.Drawing.Size(144, 33)
        Me.ComboBox2.TabIndex = 15
        '
        'Button3
        '
        Me.Button3.BackColor = System.Drawing.Color.FromArgb(CType(CType(0, Byte), Integer), CType(CType(64, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.Button3.Cursor = System.Windows.Forms.Cursors.Hand
        Me.Button3.Font = New System.Drawing.Font("Microsoft Sans Serif", 18.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Button3.ForeColor = System.Drawing.Color.White
        Me.Button3.Location = New System.Drawing.Point(564, 404)
        Me.Button3.Name = "Button3"
        Me.Button3.Size = New System.Drawing.Size(165, 50)
        Me.Button3.TabIndex = 16
        Me.Button3.Text = "বাতিল"
        Me.Button3.UseVisualStyleBackColor = False
        '
        'DataGridView1
        '
        Me.DataGridView1.AutoGenerateColumns = False
        Me.DataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.DataGridView1.Columns.AddRange(New System.Windows.Forms.DataGridViewColumn() {Me.ItemnameDataGridViewTextBoxColumn, Me.QuantityDataGridViewTextBoxColumn, Me.PriceDataGridViewTextBoxColumn})
        Me.DataGridView1.DataSource = Me.BillBindingSource3
        Me.DataGridView1.Location = New System.Drawing.Point(971, 9)
        Me.DataGridView1.Name = "DataGridView1"
        Me.DataGridView1.ReadOnly = True
        Me.DataGridView1.Size = New System.Drawing.Size(345, 663)
        Me.DataGridView1.TabIndex = 17
        Me.DataGridView1.Visible = False
        '
        'ItemnameDataGridViewTextBoxColumn
        '
        Me.ItemnameDataGridViewTextBoxColumn.DataPropertyName = "Itemname"
        Me.ItemnameDataGridViewTextBoxColumn.HeaderText = "Itemname"
        Me.ItemnameDataGridViewTextBoxColumn.Name = "ItemnameDataGridViewTextBoxColumn"
        Me.ItemnameDataGridViewTextBoxColumn.ReadOnly = True
        '
        'QuantityDataGridViewTextBoxColumn
        '
        Me.QuantityDataGridViewTextBoxColumn.DataPropertyName = "Quantity"
        Me.QuantityDataGridViewTextBoxColumn.HeaderText = "Quantity"
        Me.QuantityDataGridViewTextBoxColumn.Name = "QuantityDataGridViewTextBoxColumn"
        Me.QuantityDataGridViewTextBoxColumn.ReadOnly = True
        '
        'PriceDataGridViewTextBoxColumn
        '
        Me.PriceDataGridViewTextBoxColumn.DataPropertyName = "Price"
        Me.PriceDataGridViewTextBoxColumn.HeaderText = "Price"
        Me.PriceDataGridViewTextBoxColumn.Name = "PriceDataGridViewTextBoxColumn"
        Me.PriceDataGridViewTextBoxColumn.ReadOnly = True
        '
        'BillBindingSource3
        '
        Me.BillBindingSource3.DataMember = "Bill"
        Me.BillBindingSource3.DataSource = Me.BillDataSourceDataSet4
        '
        'BillDataSourceDataSet4
        '
        Me.BillDataSourceDataSet4.DataSetName = "BillDataSourceDataSet4"
        Me.BillDataSourceDataSet4.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema
        '
        'BillBindingSource2
        '
        Me.BillBindingSource2.DataMember = "Bill"
        Me.BillBindingSource2.DataSource = Me.BillDataSourceDataSet3
        '
        'BillDataSourceDataSet3
        '
        Me.BillDataSourceDataSet3.DataSetName = "BillDataSourceDataSet3"
        Me.BillDataSourceDataSet3.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema
        '
        'StockBindingSource
        '
        Me.StockBindingSource.DataMember = "stock"
        Me.StockBindingSource.DataSource = Me.BillDataSourceDataSet3
        '
        'BillBindingSource1
        '
        Me.BillBindingSource1.DataMember = "Bill"
        Me.BillBindingSource1.DataSource = Me.BillDataSourceDataSet1
        '
        'BillDataSourceDataSet1
        '
        Me.BillDataSourceDataSet1.DataSetName = "BillDataSourceDataSet1"
        Me.BillDataSourceDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema
        '
        'BillDataSourceDataSet
        '
        Me.BillDataSourceDataSet.DataSetName = "BillDataSourceDataSet"
        Me.BillDataSourceDataSet.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema
        '
        'BillBindingSource
        '
        Me.BillBindingSource.DataMember = "Bill"
        Me.BillBindingSource.DataSource = Me.BillDataSourceDataSet
        '
        'BillTableAdapter
        '
        Me.BillTableAdapter.ClearBeforeFill = True
        '
        'BillTableAdapter1
        '
        Me.BillTableAdapter1.ClearBeforeFill = True
        '
        'ComboBox5
        '
        Me.ComboBox5.DataSource = Me.UnitBindingSource
        Me.ComboBox5.DisplayMember = "units"
        Me.ComboBox5.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.75!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.ComboBox5.FormattingEnabled = True
        Me.ComboBox5.Location = New System.Drawing.Point(329, 258)
        Me.ComboBox5.Name = "ComboBox5"
        Me.ComboBox5.Size = New System.Drawing.Size(144, 33)
        Me.ComboBox5.TabIndex = 18
        Me.ComboBox5.ValueMember = "units"
        '
        'UnitBindingSource
        '
        Me.UnitBindingSource.DataMember = "unit"
        Me.UnitBindingSource.DataSource = Me.BillDataSourceDataSet2
        '
        'BillDataSourceDataSet2
        '
        Me.BillDataSourceDataSet2.DataSetName = "BillDataSourceDataSet2"
        Me.BillDataSourceDataSet2.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema
        '
        'UnitTableAdapter
        '
        Me.UnitTableAdapter.ClearBeforeFill = True
        '
        'StockTableAdapter
        '
        Me.StockTableAdapter.ClearBeforeFill = True
        '
        'TextBox1
        '
        Me.TextBox1.Location = New System.Drawing.Point(163, 266)
        Me.TextBox1.Name = "TextBox1"
        Me.TextBox1.Size = New System.Drawing.Size(131, 20)
        Me.TextBox1.TabIndex = 19
        Me.TextBox1.Text = "0"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.BackColor = System.Drawing.Color.Transparent
        Me.Label2.Font = New System.Drawing.Font("Microsoft Sans Serif", 15.75!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label2.ForeColor = System.Drawing.Color.Blue
        Me.Label2.Location = New System.Drawing.Point(12, 261)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(114, 25)
        Me.Label2.TabIndex = 20
        Me.Label2.Text = "ক্রয়ের পরিমাণ"
        '
        'BillTableAdapter2
        '
        Me.BillTableAdapter2.ClearBeforeFill = True
        '
        'Button4
        '
        Me.Button4.BackColor = System.Drawing.Color.FromArgb(CType(CType(0, Byte), Integer), CType(CType(64, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.Button4.Cursor = System.Windows.Forms.Cursors.Hand
        Me.Button4.Font = New System.Drawing.Font("Microsoft Sans Serif", 18.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Button4.ForeColor = System.Drawing.Color.White
        Me.Button4.Location = New System.Drawing.Point(564, 301)
        Me.Button4.Name = "Button4"
        Me.Button4.Size = New System.Drawing.Size(165, 50)
        Me.Button4.TabIndex = 21
        Me.Button4.Text = "জমা"
        Me.Button4.UseVisualStyleBackColor = False
        '
        'Button5
        '
        Me.Button5.BackColor = System.Drawing.Color.FromArgb(CType(CType(0, Byte), Integer), CType(CType(64, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.Button5.Cursor = System.Windows.Forms.Cursors.Hand
        Me.Button5.Font = New System.Drawing.Font("Microsoft Sans Serif", 18.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Button5.ForeColor = System.Drawing.Color.White
        Me.Button5.Location = New System.Drawing.Point(564, 499)
        Me.Button5.Name = "Button5"
        Me.Button5.Size = New System.Drawing.Size(165, 50)
        Me.Button5.TabIndex = 22
        Me.Button5.Text = "বন্ধ"
        Me.Button5.UseVisualStyleBackColor = False
        '
        'BillTableAdapter3
        '
        Me.BillTableAdapter3.ClearBeforeFill = True
        '
        'TableAdapterManager
        '
        Me.TableAdapterManager.BackupDataSetBeforeUpdate = False
        Me.TableAdapterManager.BillTableAdapter = Me.BillTableAdapter3
        Me.TableAdapterManager.UpdateOrder = Bengacount.BillDataSourceDataSet4TableAdapters.TableAdapterManager.UpdateOrderOption.InsertUpdateDelete
        '
        'selling
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.BackColor = System.Drawing.Color.FromArgb(CType(CType(128, Byte), Integer), CType(CType(255, Byte), Integer), CType(CType(128, Byte), Integer))
        Me.BackgroundImage = CType(resources.GetObject("$this.BackgroundImage"), System.Drawing.Image)
        Me.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center
        Me.ClientSize = New System.Drawing.Size(741, 615)
        Me.Controls.Add(Me.Button5)
        Me.Controls.Add(Me.Button4)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.TextBox1)
        Me.Controls.Add(Me.ComboBox5)
        Me.Controls.Add(Me.DataGridView1)
        Me.Controls.Add(Me.Button3)
        Me.Controls.Add(Me.ComboBox2)
        Me.Controls.Add(Me.ComboBox3)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.Button2)
        Me.Controls.Add(Me.Button1)
        Me.Controls.Add(Me.ComboBox4)
        Me.Controls.Add(Me.ComboBox1)
        Me.DoubleBuffered = True
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.MaximizeBox = False
        Me.Name = "selling"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        Me.Text = "selling"
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.BillBindingSource3, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.BillDataSourceDataSet4, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.BillBindingSource2, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.BillDataSourceDataSet3, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.StockBindingSource, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.BillBindingSource1, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.BillDataSourceDataSet1, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.BillDataSourceDataSet, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.BillBindingSource, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.UnitBindingSource, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.BillDataSourceDataSet2, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents Label1 As System.Windows.Forms.Label
    Friend WithEvents Button2 As System.Windows.Forms.Button
    Friend WithEvents Button1 As System.Windows.Forms.Button
    Friend WithEvents ComboBox4 As System.Windows.Forms.ComboBox
    Friend WithEvents ComboBox1 As System.Windows.Forms.ComboBox
    Friend WithEvents ComboBox3 As System.Windows.Forms.ComboBox
    Friend WithEvents ComboBox2 As System.Windows.Forms.ComboBox
    Friend WithEvents Button3 As System.Windows.Forms.Button
    Friend WithEvents DataGridView1 As System.Windows.Forms.DataGridView
    Friend WithEvents BillDataSourceDataSet As Bengacount.BillDataSourceDataSet
    Friend WithEvents BillBindingSource As System.Windows.Forms.BindingSource
    Friend WithEvents BillTableAdapter As Bengacount.BillDataSourceDataSetTableAdapters.BillTableAdapter
    Friend WithEvents BillDataSourceDataSet1 As Bengacount.BillDataSourceDataSet1
    Friend WithEvents BillBindingSource1 As System.Windows.Forms.BindingSource
    Friend WithEvents BillTableAdapter1 As Bengacount.BillDataSourceDataSet1TableAdapters.BillTableAdapter
    Friend WithEvents ComboBox5 As System.Windows.Forms.ComboBox
    Friend WithEvents BillDataSourceDataSet2 As Bengacount.BillDataSourceDataSet2
    Friend WithEvents UnitBindingSource As System.Windows.Forms.BindingSource
    Friend WithEvents UnitTableAdapter As Bengacount.BillDataSourceDataSet2TableAdapters.unitTableAdapter
    Friend WithEvents BillDataSourceDataSet3 As Bengacount.BillDataSourceDataSet3
    Friend WithEvents StockBindingSource As System.Windows.Forms.BindingSource
    Friend WithEvents StockTableAdapter As Bengacount.BillDataSourceDataSet3TableAdapters.stockTableAdapter
    Friend WithEvents TextBox1 As System.Windows.Forms.TextBox
    Friend WithEvents Label2 As System.Windows.Forms.Label
    Friend WithEvents BillBindingSource2 As System.Windows.Forms.BindingSource
    Friend WithEvents BillTableAdapter2 As Bengacount.BillDataSourceDataSet3TableAdapters.BillTableAdapter
    Friend WithEvents Button4 As System.Windows.Forms.Button
    Friend WithEvents Button5 As System.Windows.Forms.Button
    Friend WithEvents BillDataSourceDataSet4 As Bengacount.BillDataSourceDataSet4
    Friend WithEvents BillBindingSource3 As System.Windows.Forms.BindingSource
    Friend WithEvents BillTableAdapter3 As Bengacount.BillDataSourceDataSet4TableAdapters.BillTableAdapter
    Friend WithEvents ItemnameDataGridViewTextBoxColumn As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents QuantityDataGridViewTextBoxColumn As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents PriceDataGridViewTextBoxColumn As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents TableAdapterManager As Bengacount.BillDataSourceDataSet4TableAdapters.TableAdapterManager
End Class
