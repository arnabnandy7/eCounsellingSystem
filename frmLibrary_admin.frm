VERSION 5.00
Object = "{CDE57A40-8B86-11D0-B3C6-00A0C90AEA82}#1.0#0"; "MSDATGRD.OCX"
Object = "{67397AA1-7FB1-11D0-B148-00A0C922E820}#6.0#0"; "MSADODC.OCX"
Object = "{831FDD16-0C5C-11D2-A9FC-0000F8754DA1}#2.0#0"; "MSCOMCTL.OCX"
Begin VB.Form frmLibrary_admin 
   Caption         =   "Electronic Library Admin Control"
   ClientHeight    =   7605
   ClientLeft      =   4155
   ClientTop       =   1905
   ClientWidth     =   10725
   Icon            =   "frmLibrary_admin.frx":0000
   LinkTopic       =   "Form1"
   ScaleHeight     =   7605
   ScaleWidth      =   10725
   Begin VB.TextBox txtQuantity 
      Height          =   375
      Left            =   6360
      TabIndex        =   18
      Top             =   5880
      Width           =   3015
   End
   Begin VB.TextBox txtCategory 
      Height          =   375
      Left            =   1920
      TabIndex        =   16
      Top             =   5880
      Width           =   2535
   End
   Begin VB.TextBox txtYear 
      Height          =   375
      Left            =   6360
      TabIndex        =   14
      Top             =   5280
      Width           =   3015
   End
   Begin VB.TextBox txtPublisher 
      Height          =   375
      Left            =   1920
      TabIndex        =   12
      Top             =   5280
      Width           =   2535
   End
   Begin VB.TextBox txtAuthor 
      Height          =   375
      Left            =   1920
      TabIndex        =   10
      Top             =   4680
      Width           =   6375
   End
   Begin VB.TextBox txtTitle 
      Height          =   375
      Left            =   1920
      TabIndex        =   8
      Top             =   4080
      Width           =   6375
   End
   Begin MSDataGridLib.DataGrid DataGrid1 
      Bindings        =   "frmLibrary_admin.frx":1982
      Height          =   3495
      Left            =   240
      TabIndex        =   6
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
   Begin VB.CommandButton cmdPrevious 
      Caption         =   "&Previous"
      Height          =   495
      Left            =   6000
      TabIndex        =   5
      Top             =   6720
      Width           =   1335
   End
   Begin VB.CommandButton cmdNext 
      Caption         =   "N&ext"
      Height          =   495
      Left            =   7440
      TabIndex        =   4
      Top             =   6720
      Width           =   1335
   End
   Begin MSAdodcLib.Adodc Adodc1 
      Height          =   330
      Left            =   7560
      Top             =   0
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
      CommandType     =   2
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
      RecordSource    =   "Library"
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
   Begin VB.CommandButton cmdExit 
      Caption         =   "E&xit"
      Height          =   495
      Left            =   8880
      TabIndex        =   3
      Top             =   6720
      Width           =   1455
   End
   Begin VB.CommandButton cmdClear 
      Caption         =   "&Clear"
      Height          =   495
      Left            =   4320
      TabIndex        =   2
      Top             =   6720
      Width           =   1335
   End
   Begin VB.CommandButton cmdDelete 
      Caption         =   "&Delete"
      Height          =   495
      Left            =   2880
      TabIndex        =   1
      Top             =   6720
      Width           =   1335
   End
   Begin VB.CommandButton cmdSave 
      Caption         =   "&Save"
      Height          =   495
      Left            =   1440
      TabIndex        =   0
      Top             =   6720
      Width           =   1215
   End
   Begin MSComctlLib.StatusBar StatusBar1 
      Align           =   2  'Align Bottom
      Height          =   375
      Left            =   0
      TabIndex        =   19
      Top             =   7230
      Width           =   10725
      _ExtentX        =   18918
      _ExtentY        =   661
      _Version        =   393216
      BeginProperty Panels {8E3867A5-8586-11D1-B16A-00C0F0283628} 
         NumPanels       =   10
         BeginProperty Panel1 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Bevel           =   0
            Object.Width           =   706
            MinWidth        =   706
            Picture         =   "frmLibrary_admin.frx":1997
            Text            =   " "
            TextSave        =   " "
         EndProperty
         BeginProperty Panel2 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            AutoSize        =   1
            Text            =   "Active Form:Administration View"
            TextSave        =   "Active Form:Administration View"
         EndProperty
         BeginProperty Panel3 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Bevel           =   0
            Object.Width           =   1587
            MinWidth        =   1587
            Picture         =   "frmLibrary_admin.frx":2A29
            Text            =   "User:"
            TextSave        =   "User:"
         EndProperty
         BeginProperty Panel4 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Object.Width           =   7056
            MinWidth        =   7056
            Text            =   "Admin"
            TextSave        =   "Admin"
         EndProperty
         BeginProperty Panel5 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Bevel           =   0
            Object.Width           =   2469
            MinWidth        =   2469
            Picture         =   "frmLibrary_admin.frx":3ABB
            Text            =   "Date & Time:"
            TextSave        =   "Date & Time:"
         EndProperty
         BeginProperty Panel6 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   6
            TextSave        =   "11/14/2010"
         EndProperty
         BeginProperty Panel7 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   5
            TextSave        =   "7:59 PM"
         EndProperty
         BeginProperty Panel8 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   1
            Enabled         =   0   'False
            Object.Width           =   1058
            MinWidth        =   1058
            TextSave        =   "CAPS"
         EndProperty
         BeginProperty Panel9 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   2
            Object.Width           =   1058
            MinWidth        =   1058
            TextSave        =   "NUM"
         EndProperty
         BeginProperty Panel10 {8E3867AB-8586-11D1-B16A-00C0F0283628} 
            Style           =   3
            Enabled         =   0   'False
            Object.Width           =   1058
            MinWidth        =   1058
            TextSave        =   "INS"
         EndProperty
      EndProperty
   End
   Begin VB.Label Label5 
      Caption         =   "Quantity"
      Height          =   375
      Index           =   1
      Left            =   4920
      TabIndex        =   17
      Top             =   5880
      Width           =   1455
   End
   Begin VB.Label Label5 
      Caption         =   "Category"
      Height          =   375
      Index           =   0
      Left            =   240
      TabIndex        =   15
      Top             =   5880
      Width           =   1335
   End
   Begin VB.Label Label4 
      Caption         =   "Year"
      Height          =   375
      Left            =   4920
      TabIndex        =   13
      Top             =   5280
      Width           =   1455
   End
   Begin VB.Label Label3 
      Caption         =   "Publisher"
      Height          =   375
      Left            =   240
      TabIndex        =   11
      Top             =   5280
      Width           =   2055
   End
   Begin VB.Label Label2 
      Caption         =   "Author"
      Height          =   375
      Left            =   240
      TabIndex        =   9
      Top             =   4680
      Width           =   2055
   End
   Begin VB.Label Label1 
      Caption         =   "Tiltle"
      Height          =   255
      Left            =   240
      TabIndex        =   7
      Top             =   4200
      Width           =   1935
   End
   Begin VB.Menu file 
      Caption         =   "&File"
      Index           =   1
      Begin VB.Menu mnu 
         Caption         =   "-"
      End
      Begin VB.Menu mnu_exit 
         Caption         =   "E&xit"
      End
   End
   Begin VB.Menu mnu_view 
      Caption         =   "&View"
      Index           =   5
      Begin VB.Menu mnu_demand 
         Caption         =   "&Demand List"
      End
      Begin VB.Menu mnu_issue 
         Caption         =   "&Issue Requests"
      End
      Begin VB.Menu mnu_sp 
         Caption         =   "-"
      End
      Begin VB.Menu mnu_Status 
         Caption         =   "Status Bar"
      End
   End
   Begin VB.Menu calculate 
      Caption         =   "&Calculate"
      Index           =   2
      Begin VB.Menu mnu_type 
         Caption         =   "&Total Type of Books"
      End
      Begin VB.Menu mnu_total 
         Caption         =   "&Total No. of Books"
      End
   End
   Begin VB.Menu func 
      Caption         =   "&Functions"
      Index           =   3
      Begin VB.Menu mnu_modify 
         Caption         =   "&Modify"
      End
      Begin VB.Menu mnu_user 
         Caption         =   "&User"
      End
   End
   Begin VB.Menu help 
      Caption         =   "&Help"
      Index           =   4
      Begin VB.Menu mnu_about 
         Caption         =   "&About"
      End
   End
End
Attribute VB_Name = "frmLibrary_admin"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdClear_Click()
txtTitle.Text = " "
txtAuthor.Text = " "
txtPublisher.Text = " "
txtYear.Text = " "
txtCategory.Text = " "
txtQuantity.Text = " "
End Sub

Private Sub cmdDelete_Click()
Confirm = MsgBox("Are you sure you want to delete this record?", vbYesNo, "Deletion Confirmation")
If Confirm = vbYes Then
With Adodc1
    .Recordset.Delete
End With
MsgBox "Record Deleted!", , "Message"
Else
MsgBox "Record Not Deleted!", , "Message"
End If
End Sub

Private Sub cmdExit_Click()
frmLibrary_admin.Hide
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

Private Sub cmdSave_Click()
If MsgBox("Are you sure you want to save?", vbYesNo, "Save?") = vbYes Then
With Adodc1
    .Refresh
    .Recordset.AddNew
    .Recordset.Fields("Title") = txtTitle.Text
    .Recordset.Fields("Author") = txtAuthor.Text
    .Recordset.Fields("Publisher") = txtPublisher.Text
    .Recordset.Fields("Year") = txtYear.Text
    .Recordset.Fields("Category") = txtCategory.Text
    .Recordset.Fields("Quantity") = txtQuantity.Text
    .Recordset.Update
    .Refresh
End With
End If
End Sub

Private Sub mnu_about_Click()
frmAbout.Show
End Sub

Private Sub mnu_demand_Click()
DemandView.Show
End Sub

Private Sub mnu_exit_Click()
frmLibrary_admin.Hide
Main_menu.Show
End Sub

Private Sub mnu_issue_Click()
ViewRequest.Show
End Sub

Private Sub mnu_modify_Click()
Choice.Show
End Sub

Private Sub mnu_Status_Click()
    mnu_Status.Checked = Not mnu_Status.Checked
    StatusBar1.Visible = mnu_Status.Checked
End Sub

Private Sub mnu_total_Click()
tob.Show
End Sub

Private Sub mnu_type_Click()
ttb.Show
End Sub

Private Sub mnu_user_Click()
Userlist.Show
End Sub
