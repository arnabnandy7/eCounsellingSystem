VERSION 5.00
Object = "{CDE57A40-8B86-11D0-B3C6-00A0C90AEA82}#1.0#0"; "MSDATGRD.OCX"
Object = "{67397AA1-7FB1-11D0-B148-00A0C922E820}#6.0#0"; "MSADODC.OCX"
Begin VB.Form DemandList 
   Caption         =   "Add book to Demand List"
   ClientHeight    =   4590
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   6675
   Icon            =   "DemandList.frx":0000
   LinkTopic       =   "Form1"
   ScaleHeight     =   4590
   ScaleWidth      =   6675
   StartUpPosition =   3  'Windows Default
   Begin VB.TextBox txtMessage 
      Height          =   285
      Left            =   1800
      TabIndex        =   7
      Top             =   3240
      Width           =   2535
   End
   Begin VB.TextBox txtUsername 
      Height          =   285
      Left            =   1800
      TabIndex        =   5
      Top             =   2640
      Width           =   2535
   End
   Begin VB.CommandButton cmdOk 
      Caption         =   "&Ok"
      Height          =   495
      Left            =   5040
      TabIndex        =   3
      Top             =   3960
      Width           =   1335
   End
   Begin VB.CommandButton cmdClear 
      Caption         =   "&Clear"
      Height          =   495
      Left            =   3600
      TabIndex        =   2
      Top             =   3960
      Width           =   1215
   End
   Begin VB.CommandButton cmdAdd 
      Caption         =   "&Add"
      Height          =   495
      Left            =   2160
      TabIndex        =   1
      Top             =   3960
      Width           =   1215
   End
   Begin MSAdodcLib.Adodc Adodc1 
      Height          =   330
      Left            =   720
      Top             =   2280
      Visible         =   0   'False
      Width           =   2415
      _ExtentX        =   4260
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
      RecordSource    =   "DemandList"
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
      Bindings        =   "DemandList.frx":27A2
      Height          =   2175
      Left            =   0
      TabIndex        =   0
      Top             =   0
      Width           =   6735
      _ExtentX        =   11880
      _ExtentY        =   3836
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
   Begin VB.Label Label2 
      Caption         =   "Book ID"
      Height          =   255
      Left            =   480
      TabIndex        =   6
      Top             =   3240
      Width           =   1215
   End
   Begin VB.Label Label1 
      Caption         =   "Username"
      Height          =   255
      Left            =   480
      TabIndex        =   4
      Top             =   2640
      Width           =   1215
   End
End
Attribute VB_Name = "DemandList"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdAdd_Click()
If MsgBox("Are you sure you want to add this book demand list?", vbYesNo, "Add?") = vbYes Then
With Adodc1
    .Refresh
    .Recordset.AddNew
    .Recordset.Fields("Username") = txtUsername.Text
    .Recordset.Fields("Book Code") = txtMessage.Text
    .Recordset.Update
    .Refresh
End With
End If
End Sub


Private Sub cmdClear_Click()
txtUsername.Text = " "
txtMessage.Text = " "
End Sub

Private Sub cmdOk_Click()
Unload Me
End Sub
