VERSION 5.00
Object = "{CDE57A40-8B86-11D0-B3C6-00A0C90AEA82}#1.0#0"; "MSDATGRD.OCX"
Object = "{67397AA1-7FB1-11D0-B148-00A0C922E820}#6.0#0"; "MSADODC.OCX"
Object = "{831FDD16-0C5C-11D2-A9FC-0000F8754DA1}#2.0#0"; "MSCOMCTL.OCX"
Begin VB.Form frmLibrary 
   Caption         =   "Electrnic Library Home"
   ClientHeight    =   6930
   ClientLeft      =   4740
   ClientTop       =   2100
   ClientWidth     =   10725
   Icon            =   "frmLibrary.frx":0000
   LinkTopic       =   "Form1"
   ScaleHeight     =   6930
   ScaleWidth      =   10725
   Begin VB.CommandButton cmdExit 
      Caption         =   "E&xit"
      Height          =   495
      Left            =   8760
      TabIndex        =   4
      Top             =   6000
      Width           =   1455
   End
   Begin VB.CommandButton Command1 
      Caption         =   "Summary"
      Height          =   495
      Left            =   4080
      TabIndex        =   3
      Top             =   6000
      Width           =   1335
   End
   Begin VB.CommandButton cmdNext 
      Caption         =   "N&ext"
      Height          =   495
      Left            =   7200
      TabIndex        =   2
      Top             =   6000
      Width           =   1335
   End
   Begin VB.CommandButton cmdPrevious 
      Caption         =   "&Previous"
      Height          =   495
      Left            =   5640
      TabIndex        =   1
      Top             =   6000
      Width           =   1335
   End
   Begin MSAdodcLib.Adodc Adodc1 
      Height          =   330
      Left            =   7800
      Top             =   4200
      Visible         =   0   'False
      Width           =   1575
      _ExtentX        =   2778
      _ExtentY        =   582
      ConnectMode     =   0
      CursorLocation  =   3
      IsolationLevel  =   -1
      ConnectionTimeout=   15
      CommandTimeout  =   30
      CursorType      =   3
      LockType        =   3
      CommandType     =   1
      CursorOptions   =   0
      CacheSize       =   50
      MaxRecords      =   0
      BOFAction       =   0
      EOFAction       =   0
      ConnectStringType=   1
      Appearance      =   1
      BackColor       =   -2147483643
      ForeColor       =   -2147483640
      Orientation     =   0
      Enabled         =   -1
      Connect         =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBString     =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBFile       =   ""
      DataSourceName  =   ""
      OtherAttributes =   ""
      UserName        =   ""
      Password        =   ""
      RecordSource    =   "SELECT * FROM Library;"
      Caption         =   "Adodc1"
      BeginProperty Font {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      _Version        =   393216
   End
   Begin MSDataGridLib.DataGrid DataGrid1 
      Bindings        =   "frmLibrary.frx":1982
      Height          =   3495
      Left            =   240
      TabIndex        =   0
      Top             =   120
      Width           =   10215
      _ExtentX        =   18018
      _ExtentY        =   6165
      _Version        =   393216
      HeadLines       =   1
      RowHeight       =   15
      BeginProperty HeadFont {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      BeginProperty Font {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      ColumnCount     =   2
      BeginProperty Column00 
         DataField       =   ""
         Caption         =   ""
         BeginProperty DataFormat {6D835690-900B-11D0-9484-00A0C91110ED} 
            Type            =   0
            Format          =   ""
            HaveTrueFalseNull=   0
            FirstDayOfWeek  =   0
            FirstWeekOfYear =   0
            LCID            =   1033
            SubFormatType   =   0
         EndProperty
      EndProperty
      BeginProperty Column01 
         DataField       =   ""
         Caption         =   ""
         BeginProperty DataFormat {6D835690-900B-11D0-9484-00A0C91110ED} 
            Type            =   0
            Format          =   ""
            HaveTrueFalseNull=   0
            FirstDayOfWeek  =   0
            FirstWeekOfYear =   0
            LCID            =   1033
            SubFormatType   =   0
         EndProperty
      EndProperty
      SplitCount      =   1
      BeginProperty Split0 
         BeginProperty Column00 
         EndProperty
         BeginProperty Column01 
         EndProperty
      EndProperty
   End
   Begin MSComctlLib.StatusBar StatusBar1 
      Align           =   2  'Align Bottom
      Height          =   375
      Left            =   0
      TabIndex        =   5
      Top             =   6555
      Width           =   10725
      _ExtentX        =   18918
      _ExtentY        =   661
      _Version        =   393216
      BeginProperty Panels {8E3867A5-8586-11D1-B16A-00C0F0283628} 
         NumPanels       =   8
         BeginProperty Panel1 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Bevel           =   0
            Object.Width           =   706
            MinWidth        =   706
            Picture         =   "frmLibrary.frx":1997
         EndProperty
         BeginProperty Panel2 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            AutoSize        =   1
            Object.Width           =   6773
            Text            =   "Active Form: User View"
            TextSave        =   "Active Form: User View"
         EndProperty
         BeginProperty Panel3 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Bevel           =   0
            Object.Width           =   2469
            MinWidth        =   2469
            Picture         =   "frmLibrary.frx":2A29
            Text            =   "Date & Time:"
            TextSave        =   "Date & Time:"
         EndProperty
         BeginProperty Panel4 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   6
            TextSave        =   "11/14/2010"
         EndProperty
         BeginProperty Panel5 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   5
            TextSave        =   "7:59 PM"
         EndProperty
         BeginProperty Panel6 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   1
            Enabled         =   0   'False
            Object.Width           =   1058
            MinWidth        =   1058
            TextSave        =   "CAPS"
         EndProperty
         BeginProperty Panel7 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   2
            Object.Width           =   1058
            MinWidth        =   1058
            TextSave        =   "NUM"
         EndProperty
         BeginProperty Panel8 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   3
            Enabled         =   0   'False
            Object.Width           =   1058
            MinWidth        =   1058
            TextSave        =   "INS"
         EndProperty
      EndProperty
   End
   Begin VB.Menu file 
      Caption         =   "&File"
      Index           =   3
      Begin VB.Menu mnu_Sep1 
         Caption         =   "-"
      End
      Begin VB.Menu mnu_exit 
         Caption         =   "E&xit"
         Enabled         =   0   'False
      End
   End
   Begin VB.Menu mnu_view 
      Caption         =   "&View"
      Index           =   4
      Begin VB.Menu mnu_Status 
         Caption         =   "Status Bar"
      End
   End
   Begin VB.Menu mnu_order_by 
      Caption         =   "&Order By"
      Index           =   1
      Begin VB.Menu mnu_order_by_publisher 
         Caption         =   "&Publisher"
      End
      Begin VB.Menu mnu_order_by_year 
         Caption         =   "&Year"
      End
      Begin VB.Menu mnu_order_by_category 
         Caption         =   "&Category"
      End
      Begin VB.Menu mnu_order_by_book_id 
         Caption         =   " &id"
         WindowList      =   -1  'True
      End
      Begin VB.Menu mnu_order_by_title 
         Caption         =   "&title"
      End
      Begin VB.Menu mnu_de 
         Caption         =   "Descending"
         Index           =   7
         Begin VB.Menu mnu_order_publisher 
            Caption         =   "&Publisher"
         End
         Begin VB.Menu mnu_order_year 
            Caption         =   "&Year"
         End
         Begin VB.Menu mnu_order_category 
            Caption         =   "&Category"
         End
         Begin VB.Menu mnu_order_book_id 
            Caption         =   " &id"
         End
         Begin VB.Menu mnu_order_title 
            Caption         =   "&title"
         End
      End
   End
   Begin VB.Menu mnu_help 
      Caption         =   "&Help"
      Index           =   2
      Begin VB.Menu mnu_fin 
         Caption         =   "&Find Book"
      End
      Begin VB.Menu mnu_req 
         Caption         =   "&Book Issue"
      End
      Begin VB.Menu mnu_about 
         Caption         =   "&About Library Management System"
      End
   End
End
Attribute VB_Name = "frmLibrary"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdExit_Click()
frmLibrary.Hide
Main_menu.Show
End Sub

Private Sub cmdNext_Click()
If Not Adodc1.Recordset.EOF Then
Adodc1.Recordset.MoveNext
If Adodc1.Recordset.EOF Then
Adodc1.Recordset.MovePrevious
End If
End If
End Sub


Private Sub cmdPrevious_Click()
If Not Adodc1.Recordset.BOF Then
Adodc1.Recordset.MovePrevious
If Adodc1.Recordset.BOF Then
Adodc1.Recordset.MoveNext

End If
End If
End Sub

Private Sub Command1_Click()
Adodc1.RecordSource = "select distinct Title, Author, Publisher, Year from Library;"
Adodc1.Refresh
End Sub

Private Sub mnu_about_Click()
frmAbout.Show
End Sub


Private Sub mnu_fin_Click()
Find.Show
End Sub

Private Sub mnu_order_book_id_Click()
Adodc1.RecordSource = "select * from Library order by ID desc;"
Adodc1.Refresh
End Sub

Private Sub mnu_order_by_book_id_Click()
Adodc1.RecordSource = "select * from Library order by ID;"
Adodc1.Refresh
End Sub

Private Sub mnu_order_by_category_Click()
Adodc1.RecordSource = "select * from Library order by Category;"
Adodc1.Refresh
End Sub

Private Sub mnu_order_by_publisher_Click()
Adodc1.RecordSource = "select * from Library order by Publisher;"
Adodc1.Refresh
End Sub

Private Sub mnu_order_by_title_Click()
Adodc1.RecordSource = "select * from Library order by Title;"
Adodc1.Refresh
End Sub

Private Sub mnu_order_by_year_Click()
Adodc1.RecordSource = "select * from Library order by Year;"
Adodc1.Refresh
End Sub

Private Sub mnu_order_category_Click()
Adodc1.RecordSource = "select * from Library order by Category desc;"
Adodc1.Refresh
End Sub

Private Sub mnu_order_publisher_Click()
Adodc1.RecordSource = "select * from Library order by Publisher desc;"
Adodc1.Refresh
End Sub

Private Sub mnu_order_title_Click()
Adodc1.RecordSource = "select * from Library order by Title desc;"
Adodc1.Refresh
End Sub

Private Sub mnu_order_year_Click()
Adodc1.RecordSource = "select * from Library order by Year desc;"
Adodc1.Refresh
End Sub

Private Sub mnu_req_Click()
Requestlist.Show
End Sub

Private Sub mnu_Status_Click()
    mnu_Status.Checked = Not mnu_Status.Checked
    StatusBar1.Visible = mnu_Status.Checked
End Sub
