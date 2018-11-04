VERSION 5.00
Object = "{CDE57A40-8B86-11D0-B3C6-00A0C90AEA82}#1.0#0"; "MSDATGRD.OCX"
Object = "{67397AA1-7FB1-11D0-B148-00A0C922E820}#6.0#0"; "MSADODC.OCX"
Begin VB.Form ViewRequest 
   Caption         =   "View the issue request from users"
   ClientHeight    =   3630
   ClientLeft      =   10995
   ClientTop       =   3900
   ClientWidth     =   7650
   Icon            =   "ViewRequest.frx":0000
   LinkTopic       =   "Form1"
   ScaleHeight     =   3630
   ScaleWidth      =   7650
   Begin VB.CommandButton cmdDelete 
      Caption         =   "&Delete"
      Height          =   495
      Left            =   1800
      TabIndex        =   5
      Top             =   2880
      Width           =   1215
   End
   Begin VB.CommandButton cmdOk 
      Caption         =   "&Ok"
      Height          =   495
      Left            =   6120
      TabIndex        =   4
      Top             =   2880
      Width           =   1335
   End
   Begin VB.CommandButton cmdIssue 
      Caption         =   "&Issue"
      Height          =   495
      Left            =   240
      TabIndex        =   3
      Top             =   2880
      Width           =   1335
   End
   Begin VB.CommandButton cmdNext 
      Caption         =   "N&ext"
      Height          =   495
      Left            =   4560
      TabIndex        =   2
      Top             =   2880
      Width           =   1335
   End
   Begin VB.CommandButton cmdPrevious 
      Caption         =   "&Previous"
      Height          =   495
      Left            =   3240
      TabIndex        =   1
      Top             =   2880
      Width           =   1335
   End
   Begin MSAdodcLib.Adodc Adodc1 
      Height          =   330
      Left            =   1320
      Top             =   2520
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
      RecordSource    =   "MessageBookIssue"
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
      Bindings        =   "ViewRequest.frx":628A
      Height          =   2295
      Left            =   0
      TabIndex        =   0
      Top             =   0
      Width           =   7695
      _ExtentX        =   13573
      _ExtentY        =   4048
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
End
Attribute VB_Name = "ViewRequest"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdDelete_Click()
Confirm = MsgBox("Are you sure you want to delete this message?", vbYesNo, "Deletion Confirmation")
If Confirm = vbYes Then
With Adodc1
    .Recordset.Delete
End With
MsgBox "Message Deleted!", , "Message"
Else
MsgBox "Message Not Deleted!", , "Message"
End If
End Sub

Private Sub cmdIssue_Click()
Issue.Show
End Sub

Private Sub cmdNext_Click()
If Not Adodc1.Recordset.EOF Then
Adodc1.Recordset.MoveNext
If Adodc1.Recordset.EOF Then
Adodc1.Recordset.MovePrevious
End If
End If
End Sub

Private Sub cmdOk_Click()
Unload Me
End Sub

Private Sub cmdPrevious_Click()
If Not Adodc1.Recordset.BOF Then
Adodc1.Recordset.MovePrevious
If Adodc1.Recordset.BOF Then
Adodc1.Recordset.MoveNext
End If
End If
End Sub
